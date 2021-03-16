'use strict';

const myTime = () => {
    setInterval(function(){
        document.querySelector('#time').textContent = moment().format("DD/MM/YYYY HH:mm:ss")+ ` UTC +0 ` ;
    }, 1000);
};

myTime();