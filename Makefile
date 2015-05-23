all:
	sass css/style.scss:style.css

dev: css-watch

css-watch:
	sass --watch css/style.scss:style.css 
