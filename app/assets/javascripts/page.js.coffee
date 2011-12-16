# Place all the behaviors and hooks related to the matching controller here.
# All this logic will automatically be available in application.js.
# You can use CoffeeScript in this file: http://jashkenas.github.com/coffee-script/
jQuery ->
  $("#page_tag_list").change ->
    if @value.toLowerCase().toString() == "staff"
      $("#page_subtitle_input").show()
      $("#page_works_input").show()
      $("#page_web_input").show()
    else
      $("#page_subtitle_input").hide()
      $("#page_works_input").hide()
      $("#page_web_input").hide()
