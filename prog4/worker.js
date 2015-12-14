function fact(x){
	 if(x==0) {
      return 1;
   }
   return x * fact(x-1);
}
onmessage = function(e){
	postMessage(fact(e.data));
}