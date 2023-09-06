function hello() {
  console.log("hello world");
}
hello();

//防抖函数
function debounce(fn, delay) {
  let timer = null;

  return function () {
    if (timer) {
      clearTimeout(timer);
    }
    setTimeout(() => {
        fn.apply(this, arguments);
    }, delay)
  }
}
//节流函数
function throttle(fn, delay) {
  let timer = null;
  let startTime = Date.now();

  return function () {
    let curTime = Date.now();
    let remaining = delay - (curTime - startTime);
    let context = this;
    let args = arguments;
    clearTimeout(timer);
    if (remaining <= 0) {
      fn.apply(context, args);
      startTime = Date.now();
    } else {
      timer = setTimeout(() => {
        fn.apply(context, args);
      }, remaining);
    } 
  }   
}