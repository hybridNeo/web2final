function fact(a){
	if(a == 0 || a ==1)
		return 1;
	return fact(a-1)*a;

}
onmessage = function(a){
	postMessage(fact(a.data));
}