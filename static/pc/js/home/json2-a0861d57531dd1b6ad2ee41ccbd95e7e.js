typeof JSON!="object"&&(JSON={},function(){function f(e){return e<10?"0"+e:e}function quote(e){return escapable.lastIndex=0,escapable.test(e)?'"'+e.replace(escapable,function(e){var t=meta[e];return typeof t=="string"?t:"\\u"+("0000"+e.charCodeAt(0).toString(16)).slice(-4)})+'"':'"'+e+'"'}function str(e,t){var n,r,i,s,o=gap,u,a=t[e];typeof rep=="function"&&(a=rep.call(t,e,a));switch(typeof a){case"string":return quote(a);case"number":return isFinite(a)?String(a):"null";case"boolean":case"null":return String(a);case"object":if(!a)return"null";gap+=indent,u=[];if(Object.prototype.toString.apply(a)==="[object Array]"){s=a.length;for(n=0;n<s;n+=1)u[n]=str(n,a)||"null";return i=u.length===0?"[]":gap?"[\n"+gap+u.join(",\n"+gap)+"\n"+o+"]":"["+u.join(",")+"]",gap=o,i}if(rep&&typeof rep=="object"){s=rep.length;for(n=0;n<s;n+=1)typeof rep[n]=="string"&&(r=rep[n],i=str(r,a),i&&u.push(quote(r)+(gap?": ":":")+i))}else for(r in a)Object.prototype.hasOwnProperty.call(a,r)&&(i=str(r,a),i&&u.push(quote(r)+(gap?": ":":")+i));return i=u.length===0?"{}":gap?"{\n"+gap+u.join(",\n"+gap)+"\n"+o+"}":"{"+u.join(",")+"}",gap=o,i}}var cx=/[\u0000\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,escapable=/[\\\"\x00-\x1f\x7f-\x9f\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,gap,indent,meta={"\b":"\\b","	":"\\t","\n":"\\n","\f":"\\f","\r":"\\r",'"':'\\"',"\\":"\\\\"},rep;typeof JSON.stringify!="function"&&(JSON.stringify=function(e,t,n){var r;gap="",indent="";if(typeof n=="number")for(r=0;r<n;r+=1)indent+=" ";else typeof n=="string"&&(indent=n);return rep=t,!t||typeof t=="function"||typeof t=="object"&&typeof t.length=="number"?str("",{"":e}):"JSON.stringify 对象无法被转为JSON字符串"}),typeof JSON.parse!="function"&&(JSON.parse=function(text,reviver){function walk(e,t){var n,r,i=e[t];if(i&&typeof i=="object")for(n in i)Object.prototype.hasOwnProperty.call(i,n)&&(r=walk(i,n),r!==undefined?i[n]=r:delete i[n]);return reviver.call(e,t,i)}var j;text=String(text),cx.lastIndex=0,cx.test(text)&&(text=text.replace(cx,function(e){return"\\u"+("0000"+e.charCodeAt(0).toString(16)).slice(-4)}));if(/^[\],:{}\s]*$/.test(text.replace(/\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g,"@").replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g,"]").replace(/(?:^|:|,)(?:\s*\[)+/g,""))){if(text==="")return text;try{j=eval("("+text+")")}catch(e){return text}return typeof reviver=="function"?walk({"":j},""):j}throw new SyntaxError("JSON.parse")})}()),function(){var e=function(){var e;return function(){var t=window,n,r=Array.prototype,i=function(e){if(typeof this!="function")throw new TypeError("'this' is not a function");var t=this,n=r.slice.call(arguments,1);return function(){return t.apply(e,n.concat(r.slice.call(arguments)))}},s=function(){return this.replace(/^\s\s*/,"").replace(/\s\s*$/,"")},o=function(e){return Object.prototype.toString.call(e)==="[object Array]"||e instanceof Array},u=function(e){var t=this.length,n=+arguments[1]||0;if(t===0||isNaN(n)||n>=t)return-1;n<0&&(n=t+n,n<0&&(n=0));for(;n<t;++n)if(b(this,String(n))&&this[n]===e)return n;return-1},a=function(e){var t=this.length,n=+arguments[1]||t-1;if(t===0||isNaN(n))return-1;n<0?n=t+n:n>=t&&(n=t-1);for(;n>=0;--n)if(b(this,String(n))&&this[n]===e)return n;return-1},f=function(e){if(!y(e))throw new TypeError(e+" is not a callable object");var t=arguments[1];for(var n=0,r=this.length;n<r;++n)if(b(this,String(n))&&!e.call(t,this[n],n,this))return!1;return!0},l=function(e){if(!y(e))throw new TypeError(e+" is not a callable object");var t=arguments[1];for(var n=0,r=this.length;n<r;++n)if(b(this,String(n))&&e.call(t,this[n],n,this))return!0;return!1},c=function(e){if(!y(e))throw new TypeError(e+" is not a callable object");var t=arguments[1];for(var n=0,r=this.length;n<r;++n)b(this,String(n))&&e.call(t,this[n],n,this)},h=function(e){if(!y(e))throw new TypeError(e+" is not a callable object");var t=arguments[1],n=this.length,r=new Array(n);for(var i=0;i<n;++i)b(this,String(i))&&(r[i]=e.call(t,this[i],i,this));return r},p=function(e){if(!y(e))throw new TypeError(e+" is not a callable object");var t=arguments[1],n=this.length,r=[];for(var i=0;i<n;++i)b(this,String(i))&&e.call(t,this[i],i,this)&&r.push(this[i]);return r},d=function(e){if(!y(e))throw new TypeError(e+" is not a callable object");var t=this.length;if(t===0&&arguments.length<2)throw new TypeError("reduce of empty array with no initial value");var n=-1;if(arguments.length<2&&(n=g(this))===-1)throw new TypeError("reduce of empty array with no initial value");var r=arguments.length>1?arguments[1]:this[n];for(var i=n+1;i<t;++i)b(this,String(i))&&(r=e(r,this[i],i,this));return r},v=function(e){if(!y(e))throw new TypeError(e+" is not a callable object");var t=this.length;if(t===0&&arguments.length<2)throw new TypeError("reduce of empty array with no initial value");var n=t;if(arguments.length<2){for(var r=t-1;r>=0;--r)if(b(this,String(r))){n=r;break}if(n===t)throw new TypeError("reduce of empty array with no initial value")}var i=arguments.length>1?arguments[1]:this[n];for(var s=n-1;s>=0;--s)b(this,String(s))&&(i=e(i,this[s],s,this));return i},m=function(e,t,n,r){r=r||e;var i,s,o,u;if(!e)return!1;if(Object.prototype.toString.call(t)!=="[object Function]")throw u=new Error("第二参数不为函数。"),u.message+=u.stack,u;for(i in e){if(n&&!e.hasOwnProperty(i))continue;o=t.call(r,e[i],i);if(o!==undefined)return o}},g=function(e){for(var t=0,n=e.length;t<n;++t)if(e.hasOwnProperty(String(t)))return t;return-1},y=function(){return function(e){return typeof e=="function"?!0:typeof e!="object"?!1:e instanceof Function||e instanceof RegExp?!0:!1}}(),b=function(e,t){if(e===null&&e===undefined)return!1;if(e[t]!==undefined)return!0;var n;for(n in e)if(n===t)return!0;return!1};e=n={__ver_:"4.0.0.1",extendObj:function(e,t){var r=function(){};r.prototype=e;var i=new r;return t&&n.mergePropertyFrom(i,t),i},bind:function(e){var t=r.slice.call(arguments,1);return i.apply(e,t)},trim:function(e){return s.call(e)},isArray:function(e){return o(e)},indexOf:function(e,t){return u.call(e,t)},lastIndexOf:function(e,t){return a.call(e,t)},every:function(e,t){return f.call(e,t)},some:function(e,t){return l.call(e,t)},forEach:function(e,t){return c.call(e,t)},map:function(e,t){return h.call(e,t)},filter:function(e,t){return p.call(e,t)},reduce:function(e,t){return d.call(e,t)},reduceRight:function(e,t){return v.call(e,t)},mergePropertyFrom:function(e,t,n){var r;for(r in t)if(n||t.hasOwnProperty(r))e[r]=t[r];return e},forIn:function(e,t,n){return m(e,t,!1,n)},forInOwn:function(e,t,n){return m(e,t,!0,n)},forEachIn:function(t,r,i){if(!(0 in t&&"length"in t))return e.forIn(t,r,i);n.forEach(t,r,i)},throwLine:function(e,t){var n;n=new Error(e);var r=n.message;n.stack&&(n.message+=n.stack.toString().replace(r,""));if(!t)throw n;return{log:n.message,message:r,toString:function(){return n.message}}},addEvent:function(e,n,r){return e.addEventListener?e.addEventListener(n,r,!1):e.attachEvent&&(e[n+r]=function(){return r.call(e,t.event)},e.attachEvent("on"+n,e[n+r])),r},actOnce:function(){var e=function(t,n){if(n?!e.oIdList[n]:!t.__hasRun_)t(),t.__hasRun_=e.oIdList[n]=!0};return e.oIdList={},e}(),fixEvent:function(e,t){var n=t||window,r=e||n.event;if(!r)return e;r.target||(r.target=r.srcElement),r.relatedTarget||(r.relatedTarget=r.toElement),r.layerX||(r.layerX=r.offsetX),r.layerY||(r.layerY=r.offsetY),r.pageX||(r.pageX=r.clientX+document.documentElement.scrollLeft+document.body.scrollLeft),r.pageY||(r.pageY=r.clientY+document.documentElement.scrollTop+document.body.scrollTop),r.offsetX||(r.offsetX=r.pageX-IZZ.fnGetOffsetInDoc(r.target).left),r.offsetY||(r.offsetY=r.pageY-IZZ.fnGetOffsetInDoc(r.target).top);if(!r.which)switch(r.button){case 1:r.which=1;break;case 4:r.which=2;break;case 2:r.which=3}return r.key=r.keyCode?r.keyCode:r.which,r.preventDefault||(r.preventDefault=function(){return!1}),!r.stopPropagation&&r.cancelBubble&&(r.stopPropagation=function(){this.cancelBubble=!0}),r},removeEvent:function(e,t,n){return e.removeEventListener?n!==null&&e.removeEventListener(t,n,!1):e.detachEvent&&e[t+n]&&(e.detachEvent("on"+t,e[t+n]),e[t+n]=null),e},e:function(e){return e?e.slice(0,1)!=="#"?n.throwLine("如果选择元素ID必须用#开头。"):t.document.getElementById(e.slice(1)):null},setTo:function(e,t,r){var i,s=r,o=n.str.parseJsonPath(t);while(o.length)i=o.shift(),o.length?(s[i]=s[i]||{},s=s[i]):s[i]=e},getFrom:function(e,r){r=r||t;var i,s=n.str.parseJsonPath(e);i=r[s.shift()];while(i&&s.length)i=i[s.shift()];return i},typeOf:function(e){return Object.prototype.toString.call(e)},isString:function(e){return n.typeOf(e)==="[object String]"},isNumber:function(e){return n.typeOf(e)==="[object Number]"},isFunction:function(e){return n.typeOf(e)==="[object Function]"},goTest:function(e,t){t=t||1;var n=new Date,r;for(r=0;r<t;r++)e();var i=new Date;return i-n},prototypeForES5:function(){var e=function(e,t,n){e[t]||(e[t]=n)};e(r,"indexOf",u),e(r,"lastIndexOf",a),e(r,"every",f),e(r,"some",l),e(r,"forEach",c),e(r,"map",h),e(r,"filter",p),e(r,"reduce",d),e(r,"reduceRight",v),e(Array,"isArray",o),e(Function.prototype,"bind",i),e(String.prototype,"trim",s)}},n.apiMsg=function(){var t=0,r={}["JH.apiMsg"]=function(e,t,i,s,o){var u;e&&e.id?(u=e,e=u.id):u={},u.id=e||n.throwLine("apiMsg id 不能为空"),u.code=t||0,u.code=parseInt(u.code,10),u.msg=i||"",u.data=s||null,o&&(u.prev=o);if(u.code<0){r.number++;if(r.debug&&!r.isIgnoreId(e)&&!r.isIgnoreNum(r.number))r.debugCallback(u),n.throwLine(r.number+"#"+e+"(code "+u.code+"): "+i);else try{throw new Error("@")}catch(a){u.stack=a.stack}}return u};return n.mergePropertyFrom(r,{number:0,debugCallback:function(){},debug:!1,dump:function(r,i){var s=[];if(!r)return s;i||(t=0),t>1e3&&n.throwLine("apiMsg.dump 递归过多"),t++;var o=0,u=r;while(u){o++;if(o>1e3){alert("while dump too mach!");break}n.isArray(u)?e.forEach(u,function(e){var r=n.apiMsg.dump(e,t);s=s.concat(r)}):s.push(["{"+u.id+"}",u.code,u.msg,u.data,u.stack]),u=u.prev}return s},ignoreId:function(e){n.isArray(e)||(e=[e]),n.forEach(e,function(e){r.ignoreId[e]=!0})},ignoreNum:function(e){var t=[];arguments.length>1&&(n.forEach(arguments,function(e){t.push(e)}),e=t),n.isArray(e)||(e=[e]),n.forEach(e,function(e){r.ignoreNum[e]=!0})},isIgnoreId:function(e){return e in r.ignoreId},isIgnoreNum:function(e){return e in r.ignoreNum}})}()}(),function(t){window.print_r=function(){var n={}.print_r=function(t,r){var i,s;if(n.bp)return;if(!document.getElementById("DebugDiv")){var o=document.createElement("div");o.id="DebugDiv",o.innerHTML='<input type="button" onclick="print_r.clear();" value="Clear" /><input type="button" onclick="print_r.hidden(this);" value="Hidden" /><input type="button" onclick="print_r.stop(this);" value="Stop" /><div id="Debug_box" style="-float:left;"></div>',o.style.position="absolute",o.style.zIndex="32767",o.style.right="0";try{o.style.maxWidth="700px",o.style.wordWrap="break-word"}catch(u){}o.style.top="0",o.style.fontSize="16px",o.style.color="#fff",o.style.backgroundColor="#000",document.body.insertBefore(o,document.body.firstChild);var a=document.getElementById("Debug_box");a.style.padding="20px",a.style.position="relative",o.style.position="fixed",a.style.maxHeight="420px",a.style.overflow="auto",document.all&&!window.XMLHttpRequest&&(i=new n.fb(o,50)),n.db=a,n.dd=o}var f=document.createElement("span");t+""=="[object Object]"&&(t=e.typeOf(t)),r?f.innerHTML='<b style="color:#ff9;">'+ ++n.it+"</b> : "+t:(s=document.createElement("b"),s.innerHTML=++n.it,s.style.color="#ff9",f.appendChild(s),f.appendChild(document.createTextNode(" : "+t))),n.db.appendChild(f),n.db.appendChild(document.createElement("br")),n.db.scrollTop=n.db.scrollHeight};return t.mergePropertyFrom(n,{it:0,bp:!1,gs:function(e,t){if(e.style[t])return e.style[t];if(e.currentStyle)return e.currentStyle[t];if(document.defaultView&&document.defaultView.getComputedStyle){t=t.replace(/([A-Z])/g,"-$1"),t=t.toLowerCase();var n=document.defaultView.getComputedStyle(e,"");return n&&n.getPropertyValue(n)}return null},fb:function(e,t){var r;t=t||40,typeof e=="string"&&(e=document.getElementById(e)),e.style.position="absolute";if(!isNaN(parseInt(n.gs(e,"top"),10)))r=parseInt(n.gs(e,"top"),10),n.fnInterval=setInterval(function(){e!==null&&(e.style.top=document.documentElement.scrollTop+r+"px")},t);else if(isNaN(parseInt(n.gs(e,"bottom"),10)))r=0,n.fnInterval=setInterval(function(){e!==null&&(e.style.top=document.documentElement.scrollTop+r+"px")},t);else{var i=parseInt(n.gs(e,"bottom"),10);n.fnInterval=setInterval(function(){e!==null&&(e.style.top=document.documentElement.scrollTop+document.documentElement.clientHeight-i-e.offsetHeight+"px")},t)}},clear:function(){n.it=0,n.db.innerHTML=""},hidden:function(e){n.db.style.display==="none"?(e.value="Hidden",n.db.style.display=""):(e.value="Show",n.db.style.display="none")},stop:function(e){n.bp?(e.value="Stop",n.bp=!1):(e.value="Start",n.bp=!0)}})}(),window.var_dump=function(){var e={}.var_dump=function(n,r){var i='<span style="color:#ff9;">&lt;'+t.typeOf(n)+"&gt;</span>"+(t.isArray(n)?"":n),s,o='<b style="color:#2dd;">',u="</b>";if(!t.isString(n)){i+="<br />";for(s in n)n[s]&&n[s].toString()!==undefined&&n[s].toString()!==null?i+=o+s+u+" : "+n[s].toString().replace(/</g,"&lt;"):i+=o+s+u+" : "+n[s],i+="<br />"}r?r(i):e.alert(i)};return t.mergePropertyFrom(e,{alert:function(e){window.print_r?print_r(e,!0):alert(e)}})}()}(e),e};this.define?define([],function(){return e()}):window.JH=e()}();