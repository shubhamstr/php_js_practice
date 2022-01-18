const fs = require('fs');
const download = require('download');

(async () => {
    await download('https://shubhamstr.github.io/portfolio_landing_page_live/images/lapee.jpg').then(()=>{
        console.log('downloaded');
    });
 
    // fs.writeFileSync('dist/foo.jpg', await download('https://shubhamstr.github.io/portfolio_landing_page_live/images/lapee.jpg'));
 
    // download('shubhamstr.github.io/portfolio_landing_page_live/images/lapee.jpg').pipe(fs.createWriteStream('dist/foo2.jpg'));
})();