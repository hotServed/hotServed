const thumbContainer=document.querySelection(".thumb-container");
const allBox=thumbContainer.children;
const thumbContainerWidth=thumbContainer.offsetWidth; 
const margin=30;
var items=0;

//item setup per slide

responsive =[
   {breakpoint:{width:0,item:1}} 
   {breakpoint:{width:600,item:2}}
   {breakpoint:{width:1000,item:4}}
]

function load(){
    for(let i=0;i<responsive.length;i++){
    if(window.innerWidth>responsive[i].breakpoint.width){
    {
        items=responsive[i].breakpoint.item
    }
}
    }
}

function start(){
    for(let i=0 i<allBox.length;i++)
    {
        allBox.style.width
    }
}


windows.onload=load();