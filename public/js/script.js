$(function () {
    const myAjax = new MyAjax;
    const bejegyzesTomb = [];
    const tevekenysegTomb = [];
    let apivegpont="/api/";
    
    myAjax.adatBetolt(apivegpont + "bejegyzesek", bejegyzesTomb, bejegyzesKiirat );
    myAjax.adatBetolt(apivegpont + "tevekenyseg", tevekenysegTomb, tevekenysegKiirat);
    
    function bejegyzesKiirat(bejegyzes){
        
    }

    function tevekenysegKiirat(tevekenyseg){
        
    }


});