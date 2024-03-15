function onEntry(entry) {
  entry.forEach(change => {
    if (change.isIntersecting) {
     change.target.classList.add('element-show');
    }
  });
}

var options = {
  threshold: [0.5] };
var observer = new IntersectionObserver(onEntry, options);
var elements = document.querySelectorAll('.element-animation');

for (let elm of elements) {
  observer.observe(elm);
}

$(function(){
        
        function setHeight(){
            $(".response").each(function(index,element){
                var target = $(element);
                target.removeClass("fixed-height");
                var height = target.innerHeight();
                target.attr("data-height", height)
                      .addClass("fixed-height");
            });
        };
        
        setHeight();
    });


