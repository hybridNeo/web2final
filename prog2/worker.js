function fact(x) {
   if(x==0) {
      return 1;
   }
   return x * fact(x-1);
}
onmessage = function(e) {
    // the passed-in data is available via e.data
    postMessage(fact(e.data));
};