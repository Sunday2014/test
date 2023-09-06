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