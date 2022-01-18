var needle = require('needle');
var fs = require('fs');

// needle.get("https://jsonplaceholder.typicode.com/posts", function (err,res) {
//   if(err){
//     console.log(err);
//   }
//   console.log(res);
// });

needle.get('https://google.com/images/logo.png')
  .pipe(fs.createWriteStream('logo.png'))
  .on('done', function(err) {
    console.log('Pipe finished!');
  });