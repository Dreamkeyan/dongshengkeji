// JavaScript Document

function scrollDoor(){
}
scrollDoor.prototype = {
	sd : function(menus,divs,openClass,closeClass,operation){
	
		var _this = this;
		if(menus.length != divs.length)
		{
			alert("菜单层数量和内容层数量不一样");
			return false;
		}				
		for(var i = 0 ; i < menus.length ; i++)
		{	
			_this.$(menus[i]).value = i;
			_this.$(menus[i]).onclick = function(){
			
					
				for(var j = 0 ; j < menus.length ; j++)
				{						
					_this.$(menus[j]).className = openClass;
					_this.$(divs[j]).style.display = "none";
				}
				_this.$(menus[this.value]).className = closeClass;
				_this.$(divs[this.value]).style.display = "block";		
			}
		}
		},
	$ : function(oid){
		if(typeof(oid) == "string")
		return document.getElementById(oid);
		return oid;
	}
}