var globalvar = 'this is global';

function test(){
    if(3>0){
       let localvar = 'this is local';            
    }
    console.log(localvar);    
}

test();


