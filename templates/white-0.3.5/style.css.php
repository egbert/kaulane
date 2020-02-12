

html, body {
	width: 100%;
	height: 100%;
}
.ie6 html {
	overflow-y: hidden;
}



body {
	background-color: #fff;
	color: #000000;
	font-family: &lt;link href='http;
	font-size: 14px;
	font-weight: normal;
	font-style: normal;
	font-variant: normal;
	line-height: normal;

	background-color: #FFFFFF;
	
	text-align: left;

}
.ie6 {
	overflow-y: hidden;
}

a:link {
	color: #666666;
	text-decoration: none;
	/*border: ;*/
}
a:visited {
	color: #666666;
	text-decoration: none;
	/*border: ;*/
}
a:hover {
	color: #666666;
	text-decoration: underline;
	/*border: ;*/
}
a:active {
	color: #666666;
	text-decoration: underline;
	/*border: ;*/
}

a img { border: none; }








#allContainer {
	position: relative;
	margin: 0;
	padding: 0;
}
	#allContainer.xCentered {
		margin: 0 auto;
		width: 750px;
	}
.ie6 #allContainer {
	width: 100%;
	height: 100%;
	overflow-x: auto;
}


	#sideColumn {
		position: fixed;
		z-index: 2000;
		width: 100px;
		top: 0; bottom: 0;
		left: 25px;
		background-color: #fff;
	}
		#sideColumn.xCentered {
			left: 50%;
			margin-left: -375px;
		}
	.ie6 #sideColumn {
		position: absolute;
		height: 100%;
	}

		#sideColumnTop {
			padding: 30px 20px 20px;
			/*width: 140px;*/
		}

			#sideColumnTop h1 {
				min-height: 40px;
				float: none;
				padding: 0;
				margin: 0;
				color: #000000;
				font-family: inherit;
				font-size: 20px;
				font-weight: bold;
				font-style: normal;
				font-variant: normal;
				line-height: 1em;

				margin-top: 10px;
				margin-bottom: 20px;
			}
				#sideColumnTop h1 a {
					color: #000000 !important;
					text-decoration: none;
				}

			#sideColumnTop a:link, #sideColumnTop a:visited {
				color: #000000;
				text-decoration: none;
			}
			#sideColumnTop a:hover {
				color: #666666;
				text-decoration: underline;
				/*border: ;*/
			}
			#sideColumnTop a:active, #sideColumnTop li.selected>a, #sideColumnTop li.selected>span {
				color: #1ddeb4;
				text-decoration: none;
				/*border: ;*/
			}


			#sideColumnTop ul {
				list-style: none;
				margin: 0 0 20px;
				padding: 0;
			}
				#sideColumnTop ul li {
					padding-bottom: 6px;
					font-weight: bold;
				}
					#sideColumnTop ul li.selected>a {
						/*font-weight: bold;
						color: #000;*/
					}
				#sideColumnTop ul ul {
					margin: 0 0 0 10px;
				}
					#sideColumnTop ul ul li {
						padding-bottom: 0;
						font-weight: normal;
						text-transform: none;
					}

		#additionalText {
			position: absolute;
			min-width: 140px;
		}


		#sideColumnBottom {
			position: absolute;
			bottom: 0;
			width: 140px;
			padding: 20px 20px 30px;
		}
			#sideColumnBottom p {
				width: 100%;
				font-size: 10px;
				margin: 0;
				padding: 0;
			}
			#sideColumnBottom #userCopyright {

			}
			#sideColumnBottom #bertaCopyright {

			}



	#contentContainer {
		position: relative;
		z-index: 1000;
	}
		#allContainer.xCentered #contentContainer {
			width: 100%;
		}
	.ie6 #contentContainer {
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
		overflow: auto !important;
	}

		#mainColumn {
			position: relative;
			padding-top: 100px;
			margin-left: 100px;
			padding-bottom: 20px;
			padding-left: 50px;
			/*width: 800px;*/
			width: 600px;
		}
			#mainColumn.xCentered {
				left: 50%;
				margin-left: -275px;
			}


		ol#pageEntries {
			position: relative;
			margin: 0;
			padding: 0;
			list-style: none;
		}
			ol#pageEntries li.xEntry {
				position: relative;
				clear: both;
				list-style:none;
				margin-bottom: 40px;
				padding: 0;
			}

				ol#pageEntries li.xEntry h2 {
					padding: 0;
					margin: 0;
					font-size: 16px;
					font-weight: bold;
				}
				ol#pageEntries li.xEntry .xGalleryContainer {
					position: relative;
					clear: both;
					padding: 0;
					margin-bottom: 1em;
				}
				ol#pageEntries li.xEntry .xGalleryType-slideshow {

				}
				ol#pageEntries li.xEntry .xGalleryType-row {

				}
                ol#pageEntries li.xEntry .xGalleryType-pile {

                }
                ol#pageEntries li.xEntry .xGalleryType-column {

                }

					ol#pageEntries li.xEntry .xGalleryContainer .xGallery {
						position: relative;
					}
					ol#pageEntries li.xEntry .xGalleryType-slideshow .xGallery {
						margin-bottom: 10px;
					}

						ol#pageEntries li.xEntry .xGalleryContainer .xGallery div.xGalleryItem { display: block; }
						ol#pageEntries li.xEntry .xGalleryType-column div.xGalleryItem {
							padding-bottom: 1em;
						}
                        ol#pageEntries li.xEntry .xGalleryType-row div.xGalleryItem {
                            position: relative;
                            float: left;
                            padding-right: 1em;
                        }
						ol#pageEntries li.xEntry .xGalleryType-slideshow .xGalleryImageCaption { display: none; }

					ol#pageEntries .xGalleryContainer ul.xGalleryNav {
						display: block;
						position: relative;
						clear: both;
						margin: 0 0 2px;
						padding: 0;
						list-style: none;
						height: 18px;
					}
						ol#pageEntries .xGalleryContainer ul.xGalleryNav li {
							display: block;
							float: left;
							list-style: none;
							line-height: 96%;
							margin: 0;
						}
						ol#pageEntries .xGalleryContainer ul.xGalleryNav li .xGalleryImageCaption { display: none; }
						ol#pageEntries .xGalleryContainer ul.xGalleryNav li a {
							display: block;
							float: left;
							padding: 1px 5px 1px;
							color: #000000;
							text-decoration: none;
							outline: none;
						}
						ol#pageEntries .xGalleryContainer ul.xGalleryNav li a:hover {
							color: #666666;
							text-decoration: underline;
						}
						ol#pageEntries .xGalleryContainer ul.xGalleryNav li.selected a {
							color: #1ddeb4;
							text-decoration: none;
						}


				ol#pageEntries li.xEntry .entryText {
					position: relative;
					clear: both;
					margin: 0 0 6px;
				}
					ol#pageEntries li.xEntry .entryText p {
						margin: 0 0 6px;
					}

					/* disqus fix */
					ol#pageEntries #dsq-content ul, ol#pageEntries #dsq-content li {
					    list-style-position: outside;
					    list-style-type: none;
					    margin: 0;
					    padding: 0;
					}

					ol#pageEntries li.xEntry .entryText ul {
						margin: 0 0 6px;
						padding: 0 0 0 15px;
					}
						ol#pageEntries li.xEntry .entryText ul li {
							list-style-type: circle;
							margin: 0 0 3px 0;
							padding: 0;
						}
					ol#pageEntries li.xEntry .entryText ol {
						margin: 0 0 6px;
						padding: 0 0 0 15px;
					}
						ol#pageEntries li.xEntry .entryText ol li {
							margin: 0 0 3px 0;
							padding: 0;
							list-style-type: decimal;
						}


				ol#pageEntries li.xEntry .entryTags {
					position: relative;
					clear: both;
				}



				.floating-banner {
					position: absolute;
					z-index: 3000;
				}









