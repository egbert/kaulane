require 'rubygems'
require 'bundler/setup'

Bundler.require :default

Dir['_projects/project*'].each do |p|
  file_content = File.read(p)
  match = file_content.match Jekyll::Document::YAML_FRONT_MATTER_REGEXP
  data = SafeYAML.load(match[0])
  content = match.post_match
  
  filename = data['title'].match(/([^\(]+) \(/)[1].downcase.gsub(/[\. ,\/-]+/, '-')
  File.write("_projects/#{filename}.html", file_content)
end
