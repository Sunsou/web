// JavaScript Document
window.onload=function(){
	var boxs=document.getElementsByTagName('div');
	for( var i in boxs){
		var box=boxs[i],
			menu=box.getElementsByTagName('ul')[0],
			title=box.getElementsByTagName('cite')[0],
	    	as=box.getElementsByTagName('a'),
        	index=-1;
		
		mouse(box,menu);
		fun(as,title,menu);	
	}
}
function mouse(box,menu){
    box.onmouseover=function(event){
		event=event || window.event;
        if(event.stopPropagation){
           event.stopPropagation();
        }
        else{
           event.cancelBubble=true;
        }
        menu.style.display="block";
    } 
	box.onmouseout=function(event){
		event=event || window.event;
        if(event.stopPropagation){
           event.stopPropagation();
        }
        else{
           event.cancelBubble=true;
        }
        menu.style.display="none";
    }
}

function fun(as,title,menu){
	for(var i in as){
		as[i].onclick = function(event){
			event = event||window.event;
			if(event.stopPropagation){
				event.stopPropagation(); 
			}
        	else{
            	event.cancelBubble = true;     
        	}
			menu.style.display='none';
        	title.innerHTML = this.innerHTML;  
		}  
    }	
}	
		
/*//建立AJAX对象
function InitAjax(){
	var ajax=null;
	try{
		aax=new ActiveXObject('Msxml2.XMLHTTP');	
	}catch(e){
		try{
			ajax=new ActiveXObject('Microsoft.XMLHTTP');	
		}catch(e){
			try{
				ajax=new XMLHttpRequest();	
			}catch(e){}	
		}
	}
	return ajax;
}

//AJAX应用实体
function sendajax(sURL,obj,pdata){
	var ajax=InitAjax();
	if(pdata==false){
		ajax.open('GET',sURL,true);
		ajax.send(null);	
	}
	else{
		ajax.open('POST',sURL,true);
		ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
		ajax.send(pdata);	
	}
	ajax.onreadystatechange=function(){
		if(ajax.readyState==4){
			if(ajax.status!=200){
				self.status='访问出错，请重试！';	
			}
			else{
				eval(ajax.reponseText);
				obj.innerHTML=ajax.reponseText;
				delete ajax;
				ajax=null;
				CollectGarbage();
			}
		}	
	}
}*/