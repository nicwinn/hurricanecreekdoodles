From
```
/wp-content/themes/hurricanecreekdoodles/package.json 

"watch-run-css": "nodemon 
--watch src/sass/ 
--ext scss 
--exec 
\"npm-run-all css\"
",
```

To build minified css run `npm run watch-run-css` and deploy:
1. `/wp-content/themes/hurricanecreekdoodles/css/child-theme.min.css`
2. `/wp-content/themes/hurricanecreekdoodles/css/child-theme.min.css.map`