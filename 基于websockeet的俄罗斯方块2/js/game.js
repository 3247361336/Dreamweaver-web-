// JavaScript Document
var Game=function(){
	//dom
	var gameDiv;
	var nextDiv;
var gameData = [
	[0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0]
	
	
];<!--数组10*20-->
	//当前方块
	var cur;
	//下一方块
	var next;
	//divs
	var nextDivs=[];
	var gameDivs=[];
	//初始化Div
var initDivs = function(container,data,divs){
	for(var i=0;i<data.length;i++){
		var div=[];<!--临时处理-->
		for(var j=0;j<data[0].length;j++){
			var newNode= document.createElement('div');
			newNode.className='none';
			newNode.style.top=(i*20)+'px';
			newNode.style.left=(j*20)+'px';
			container.appendChild(newNode);
			div.push(newNode);
			}
			divs.push(div);
		}
	}

var refreshGame =function(data){
	for(var i=0;i<data.length;i++){
		for(var j=0;j<data[0].length;j++){
				if(data[i][j]==0){
					gameDivs[i][j].className='none';
				}else if(data[i][j]==1){
					gameDivs[i][j].className='done';
				}else if(data[i][j]==2){
					gameDivs[i][j].className='current';
				}		
		}
	}
}
}
