require 'rubygems'
require 'bundler/setup'

Bundler.require :default

index_data = Nokogiri::HTML(Rack::Jekyll.new.call('/').last.first)
  .css('#projectoverview a')
  .map.with_index {|p, i|
    {
      order: i,
      orientation: p.css('div').first.attributes['class'].value[/([^ ]*)$/],
      alinea: p.css('.alinea').text,
      title: p.css('h1').text,
      info: p.css('h2').text,
      page: p.attributes['href'].value
    }
  }


Dir['project*'].each do |p|
  match = File.read(p).match Jekyll::Document::YAML_FRONT_MATTER_REGEXP
  data = SafeYAML.load(match[0])
  content = match.post_match
  index = index_data.find do |d|
    p d
    d[:page] == p
  end.transform_keys(&:to_s)

  index.delete 'page'

  p 'index', index
  p 'data', data
  
  File.write(p, (index.merge(data)).to_yaml + "---\n" + content)
end
