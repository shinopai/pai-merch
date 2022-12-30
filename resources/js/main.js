$(function(){
  var fromNum = $("input[name='from']");
  var toNum = $("input[name='to']");

  fromNum.change(function(){
    toNum.attr('min', $(this).val());
  })

  toNum.change(function(){
    fromNum.attr('max', $(this).val());
  })
})
