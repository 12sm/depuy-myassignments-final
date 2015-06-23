$('#mblSrchBtn').click(function(){
  if($('#mblNavSrch').hasClass('hide')) {
    $('#mblNavSrch').fadeTo(100, 1, function() {
     $('#mblNavSrch input').focus();
    });
  } else if ($("#search1").val().length > 0 && $("#search1").val() != getURLParam("searchData")) { //submit the search if it has data.
    $("#mblSearchForm").submit();
  } else { //hide the input field
    $('#mblNavSrch').fadeTo(100, 0);
  }
  $('#mblNavSrch').toggleClass('hide');
});

$('#mobileDropdown').on('show.bs.dropdown', function() {
  $('#mobileNavIcon').removeClass('icon-caret-down').addClass('icon-caret-up');
}).on('hide.bs.dropdown', function() {
  $('#mobileNavIcon').removeClass('icon-caret-up').addClass('icon-caret-down');
});

$(".smtElipse").dotdotdot({
  watch: "window"
});

function siteSearch(form) {
  if (form.searchData.value.length == 0) {
    alert("Please enter a search term");
    return false;
  }
  return true;
}

//Toggles the favorites flag.
function setFlags() {
  $('.flag').click(function() {
    if (roleNo == 0) {
      //prompt to login
      promptLogin();
    } else {
      editFavorite($(this), $(this).hasClass('opaque'));
      $(this).toggleClass('opaque');
    }
  });
}

var roleNo = 0;
function loadDSIFavorites(role) {
  if (role != null && role > 0) {
    loadFavorites();
    roleNo = role;
  }
}
function promptLogin() {
  $('#signin').modal({
    remote: $("#smtLoginLink").attr("href")
  });
}

/** capture the user's display preference (gallery or list view) into a cookie **/
function setDisplayPref(type) {
  createCookie("dsiDisplayPref", type, 90);
}
/**
 * sets up bootstrap functionality and styling for checkbox, radio, and dropdown form fields
 * typically called from document.ready on pages that need it.
 */
function bindFormFuctions() {
  $('input[type="checkbox"]').change(function() {
    if ($(this).is(':checked')) {
      $(this).parent('label').addClass('input_checked');
    } else {
      $(this).parent('label').removeClass('input_checked');
    }
  });
  $('input[type="radio"]').change(function() {
    var name = $(this).attr('name');
    $('input[name="' + name + '"]').parent('label').removeClass('input_checked');
    if ($(this).is(':checked')) {
      $(this).parent('label').addClass('input_checked');
    }
  });
}

$('.selection_accordion .panel-collapse').on('show.bs.collapse', function(e) {
  var id = $(e.currentTarget).attr('id');
  $('a[href="#' + id + '"]').children('.glyphicon').removeClass('icon-caret-down').addClass('icon-caret-up');
}).on('hide.bs.collapse', function(e) {
  var id = $(e.currentTarget).attr('id');
  $('a[href="#' + id + '"]').children('.glyphicon').removeClass('icon-caret-up').addClass('icon-caret-down');
});

$('.hero_image').imgLiquid({fill:true, verticalAlign:'center'});

/**
 * opens a reused modal window with the EAF form
 * @param pageUrl
 */
function shareEmail(pageUrl) {
  if (pageUrl.charAt(0) == "/") pageUrl = location.origin + pageUrl;

  $('#register1').modal({
    remote: "/json?amid=email&view=true&emailFriendUrl=" + pageUrl
  }).on('hidden.bs.modal', function (e) {
    //flush it out so we can reuse it
    $(this).removeData('bs.modal');
  });
}

function filterContentType() {
  $('#contentTypes').modal(preSelectFilters("#contentTypes", "contentTypesAll") )
  .on('hidden.bs.modal', function (e) {
    resetDefaultStates("contentTypes");
  });
}
function applyContentTypeFilters() {
  //reload the page with the selected filters applied
  setPage(0);
  showSearchResults();
  $('#contentTypes').modal('hide');
}

function filterProcedures() {
  $('#procedures').modal(preSelectFilters("#procedures", "proceduresAll") )
  .on('hidden.bs.modal', function (e) {
    resetDefaultStates("procedures");
  });
}
function applyProcedureFilters() {
  //reload the page with the selected filters applied
  setPage(0);
  showSearchResults();
  $('#procedures').modal('hide');
}

function filterCourseSpeciaty() {
  $('#specialties').modal(preSelectFilters("#specialties", "specialtyAll"))
  .on('hidden.bs.modal', function (e) {
    resetDefaultStates("specialties");
  });
}
function applyCourseSpecialtyFilters() {
  var vals = Array();
  //reload the page with the selected filters applied
  if (! $("#specialties input[name='specialtyAll']").is(':checked')) {
    $("#specialties input[name='specialty']:checked").each(function() {
        vals.push($(this).val());
    });
  }
  showCalendar(getURLParam("page"), vals.join("~"), getURLParam("location"));
  $('#specialties').modal('hide');
}

function filterCourseLocation() {
  $('#locations').modal(preSelectFilters("#locations", "locationAll"))
  .on('hidden.bs.modal', function (e) {
    resetDefaultStates("locations");
  });
}
function applyCourseLocationFilters() {
  var vals = Array();
  //reload the page with the selected filters applied
  if (! $("#locations input[name='locationAll']").is(':checked')) {
    $("#locations input[name='location']:checked").each(function() {
        vals.push($(this).val());
    });
  }
  showCalendar(getURLParam("page"), getURLParam("specialty"), vals.join("~"));
  $('#locations').modal('hide');
}

function resetDefaultStates(ele) {
  $("#" + ele + " input[type='checkbox']").each(function() {
    // if the state has changed reset the checkboxes for next time
    if ($(this).prop("checked") != $(this).prop("defaultChecked")) {
      $(this).prop("checked", $(this).prop("defaultChecked"));
      $(this).parent('label').toggleClass('input_checked');
    }
  });
}
function preSelectFilters(ele, allNm) {
  //check the boxes that are selected
  $(ele + " input[type='checkbox']:checked").each(function() {
    $(this).parent('label').addClass('input_checked');
    //if this is a sublevel checkbox, find the parent and make sure it's not collapsed
    if ($(this).hasClass("sublevel")) {
      var par = $(this).closest(".panel");
      $(par).find("a.check_collapse").removeClass("collapse");
      $(par).find("div.panel-collapse").addClass("in").css("height","auto");
    }
  });
  bindFormFuctions();
  //bind the 'all' with toggle behavior
  $(ele + " input[name='" + allNm + "']").change(function() {
    var val = $(this).is(':checked');
    $(ele + " input[type='checkbox']").not(":eq(0)").each(function() {
      $(this).prop("checked", val);
      if (val) $(this).parent('label').addClass('input_checked');
      else $(this).parent('label').removeClass('input_checked');
    });
  });
}
function showCalendar(pg, spec, locn) {
  var url = "";
  if (spec) {
    url += "?specialty=" + encodeURIComponent(spec);
    if (encodeURIComponent(spec) != getURLParam("specialty"))
      pg = 0;
  }
  if (locn != null && locn.length > 0) {
    url += (url.length > 0) ? "&" : "?";
    url += "location=" + encodeURIComponent(locn);
    if (encodeURIComponent(locn) != getURLParam("location"))
      pg = 0;
  }
  if (pg) url += ((url.length > 0) ? "&" : "?") + "page=" + pg;
  if (decodeURIComponent(location.search) != decodeURIComponent(url)) {
    if (url == "") url = window.location.pathname;
    window.location = url;
  }
}
function calendarPage(pgNo) {
  showCalendar(pgNo, getURLParam("specialty"), getURLParam("location"));
}

/**
 * get pageView stats for the entire site, cache it in sessionStorage, then use
 * that to populate "# views" in the DOM.
 */
function populateStatBoxes() {
  //check if we even need to run stats
  if ($(".smtPageView").length == 0) return;

  var obj = new Object();
  obj.callBack = populateStatBoxesCallback;
  obj.putInCache = false;
  obj.responseText = retrFromCache("DSI_PAGEVIEW_STATS");
  if (obj.responseText == null) {
    obj.putInCache = true;
    getViews("", obj); //get whole-site stats in one object
  } else {
    populateStatBoxesCallback(obj); //used the cached object
  }
}
function populateStatBoxesCallback(obj) {
  if (obj.putInCache && obj.responseText != null) {
    putInCache("DSI_PAGEVIEW_STATS", obj.responseText);
  }
  try {
    var resData = eval('(' + obj.responseText + ')');
    $(".smtPageView").each(function(i) { //loop and find the DOM elements that need stats
      for ( var x = 0; x < resData.length; x++) { //match against the stats we have
        if ($(this).attr("smt-uri") == resData[x].uri) {
          $(this).text(resData[x].pageViews + (resData[x].pageViews > 1 ? " views" : " view"));
          break; //we've got our match, move on
        }
      }
      if ($(this).text() == "") $(this).text("0 views");
    });
  } catch (err) {}
}

function setupVideoPlayers() {
  //check if we even have video(s) to setup
  if ($(".smtVideoWrapper").length == 0) return;

  $(".smtVideoWrapper").each(function() {
    loadSMTVideoPlayer(eval('(' + $(this).attr("smt-video") + ')'));
  });
}

/**
 * this function is used on the "My Course" details page, where pre & post course can link to DSI assets
 * We need to load the asset dynamically, since they can change every 24hrs.
 */
function populateGalleryBlocks() {
  url = "/json?amid=loadAsset&view=true&reqParam_1=";
  $.ajaxSetup({ async : false });
  $("div.smt-dsi-gallery-asset").each(function(idx, val) {
    $.get((url + $(val).text()), function(data) {
      $(val).html(data);
    });
  });
  $.ajaxSetup({ async : true });
}

function sendToCalendar(type, event, pmid) {
  var url = "";
  switch (type) {
    case "MSN":
      url = "http://calendar.live.com/calendar/calendar.aspx?rru=addevent&summary=" + enc(event.name) +
      "&dtstart=" + event.startDateTime + "&dtend=" + event.endDateTime + "&description=" + enc(event.name) + "%0D" +
      enc(event.opco) + "%0D%0DFor more information:%0D" + enc(document.location) +
      "&location=" + enc(event.locn);
      break;

    case "GOOGLE":
      url = "http://www.google.com/calendar/event?action=TEMPLATE&text=" + enc(event.name) +
          "&dates=" + event.startDateTime + "/" + event.endDateTime + "&details=" + enc(event.name) + "%0D" +
          enc(event.opco) + "%0D%0DFor more information:%0D" + enc(document.location) +
          "&location=" + enc(event.locn);
      break;

    case "YAHOO":
      url = "http://calendar.yahoo.com/?v=60&title=" + enc(event.name) +
      "&st=" + event.startDateTime + "&et=" + event.endDateTime + "&DESC=" + enc(event.name) + "%0D" +
      enc(event.opco) + "%0D%0DFor more information:%0D" + enc(document.location) +
      "&in_loc=" + enc(event.locn) + "&URL=" + enc(document.location);
      break;

    default:
      url = "?pmid=" + pmid + "&requestType=reqBuild&eventEntryId=" + event.id + "&rptType=iCal";
  }
  if (url.length > 0)
    window.open(url);
}
function enc(val) {
  //create a placeholder we can use to scrub the JSTL-escaped HTML. (&amp;)
  var div = document.createElement('div');
  div.innerHTML = val;
  var decoded = div.firstChild.nodeValue;
  return encodeURIComponent(decoded);
}

function initSearchAutoSuggest() {
  var solrSuggests = new Bloodhound({
    datumTokenizer: Bloodhound.tokenizers.whitespace('name'),
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    remote: {
      url: '/json?amid=suggest&solrSuggest=true&searchData=%QUERY',
      filter: function(list) {
        return $.map(list.actionData, function(val) { return { name: val }; });
      }
    }
  });
  solrSuggests.initialize();

  $('.typeahead').typeahead({
    hint: false,
    highlight: false,
    minLength: 3
  },
  {
    name: 'searchData',
    displayKey: 'name',
    source: solrSuggests.ttAdapter()
  });
}

/**
 * init DSI
 */
function initDSI(role) {
  populateGalleryBlocks();
  setFlags();
  populateStatBoxes();
  loadDSIFavorites(role);
  setupVideoPlayers();
  initSearchAutoSuggest();

  // THIS IS THE JS FOR THE MY ASSIGNMENTS VIEWS
  // ALL JS USED ON THESE PAGES IS CALLED HERE
  initMyAssigmentsPg();
}

function initMyAssigmentsPg(){
  setTimeout(function(){
    $(".acc-menuFU").trigger('click');
  },200);
  bindFormFuctions();
  //----  KNOWLEDGE CENTER MENU ICON  ----//
  $("li>a.nav_knowledge-center").click(flipArrow);

  //----  RESIDENT DROPDOWNS  ----//
  $("div>a.nav_knowledge-center").click(dropChevron);
  flipChevron();
  $(".iconFlipAll").parent().click(function(){
    setTimeout(flipChevron, 200);
  });
  $(".panel-body div div p input").click(toggleCheckAll);
  $(".panel-title input").click(checkAll);

  //----  NEW SEQUENTIAL ASSIGNMENT TOGGLE  ----//
  $("#yesSeq").click(function(){
    $(".myAssignments").find(".seqNumber").removeClass("displayNoneSon");
    $(".myAssignments").find(".suggested-sequence").removeClass("displayNoneSon");
    $(".single-class").children(':first-child').next().removeClass("col-xs-11 col-md-11");
    $(".single-class").children(':first-child').next().addClass("col-xs-9 col-md-10");
  });
  $("#noSeq").click(function(){
    $(".myAssignments").find(".seqNumber").addClass("displayNoneSon");
    $(".myAssignments").find(".suggested-sequence").addClass("displayNoneSon");
    $(".single-class").children(':first-child').next().removeClass("col-xs-9 col-md-10");
    $(".single-class").children(':first-child').next().addClass("col-xs-11 col-md-11");
  });


  //----  INVITE SENT TOGGLE  ----//
  $(".inviteAgain").click(toggleInvite);

  //----  DROPDOWN MENU INITS  ----//
  $('#acc-menu5').collapse("hide");
  $('#acc-menu6').collapse("hide");
  $('#acc-menuPgy1').collapse("hide");
  $('#acc-menuPgy2').collapse("hide");
  $('#acc-menuPgy11').collapse("hide");
  $('#acc-menuPgy12').collapse("hide");
  $('#mat1').collapse("hide");
  $('#mat2').collapse("hide");
  $('#mat3').collapse("hide");
  $('#mat4').collapse("hide");
  $('#mat5').collapse("hide");
  $('#mat6').collapse("hide");
  $('#mat7').collapse("hide");

  //----  REGISTRATION MODAL CONTROLS  ----//
  $("input.ortho-unhide").click(function(){
    $("div.flying-ashtrays").removeClass("hidden");
  });
  $("input.aa").click(function(){
    $("div.flying-ashtrays").addClass("hidden");
  });
  $("#whatNumber").change(function(){
    var option = $(this).children(":selected").attr("id");
    switch(option){
      case "slNumber":
        $(".identification-number-options").addClass("hidden");
        $(".npi-number-options").addClass("hidden");
        $(".state-license-number-options").removeClass("hidden");
        break;
      case "noNumber":
        $(".npi-number-options").addClass("hidden");
        $(".state-license-number-options").addClass("hidden");
        $(".identification-number-options").removeClass("hidden");
        break;
      default:
        $(".state-license-number-options").addClass("hidden");
        $(".identification-number-options").addClass("hidden");
        $(".npi-number-options").removeClass("hidden");
        break;
    }
  });
  $("input#noMili").prop('checked', true);
  $("input#yesAssign").prop('checked', true);
  $("input#yesMili").click(function(){
    $("div#proffer").removeClass("hidden");
  });
  $("input#noMili").click(function(){
    $("div#proffer").addClass("hidden");
  });
  $(".modalSelection").select2();
  $(".modalSelectionDegree").select2({
    placeholder: "Select Degree",
    allowClear: true
  });
  $(".modalSelectionState").select2({
    placeholder: "State",
    allowClear: true
  });
  $(".modalSelectionSpecialty").select2({
    placeholder: "Select Profession",
    allowClear: true
  });
  $(".modalSelectionProvince").select2({
    placeholder: "Province",
    allowClear: true
  });

  //----  ASSIGNMENT COMPLETION INITS  ----//
  $(".forgotten").click(checkIt);
  $(".forget").click(uncheckIt);
}

function flipArrow(){
  if($(this).find("span").hasClass("icon-arrow-up")){
    $(this).find("span").removeClass("icon-arrow-up");
    $(this).find("span").addClass("icon-arrow-down");
  }else{
    $(this).find("span").removeClass("icon-arrow-down");
    $(this).find("span").addClass("icon-arrow-up");
  }
}

function dropChevron(){
  if($(this).find("span").hasClass("icon-caret-up")){
    $(this).find("span").removeClass("icon-caret-up");
    $(this).find("span").addClass("icon-caret-down");
  }else{
    $(this).find("span").removeClass("icon-caret-down");
    $(this).find("span").addClass("icon-caret-up");
  }
}

function flipChevron(){
  var spans = $("div.panel-group").find("a");
  for(var i = 0; i < spans.length; i++){
    if($(spans[i]).hasClass("collapsed")){
      $(spans[i]).find("span.iconFlipAll").removeClass("icon-caret-up");
      $(spans[i]).find("span.iconFlipAll").addClass("icon-caret-down");
    }else{
      $(spans[i]).find("span.iconFlipAll").removeClass("icon-caret-down");
      $(spans[i]).find("span.iconFlipAll").addClass("icon-caret-up");
    }
  }
}

function toggleCheckAll(){
  var panelColl = $(this).closest(".panel-collapse");
  var panelDef = $(this).closest(".panel-default");
  var inputs = $(panelColl).find("input");
  for(var j = 0; j < inputs.length; j++){
    if(!$(inputs[j]).prop("checked")){
      $(panelDef).find(".panel-title input").removeAttr("checked");
      break;
    }else{
      $(panelDef).find(".panel-title input").prop("checked", true);
    }
  }
}

function checkAll(){
  var panel = $(this).closest(".panel-default")[0];
  var body  = $(panel).find(".panel-body")[0];
  if($(this).prop("checked")){
    $(body).find("input").prop("checked", true);
  }else{
    $(body).find("input").removeAttr("checked");
  }
}

function toggleInvite(){
  var sent = $("<p><strong>Invite Sent</strong></p>");
  var deev = $(this).closest(".inviteDiv")[0];
  deev.appendChild(sent[0]);
  $(this).remove();
}

function checkIt(){
  $(this).closest(".contention").toggleClass("grey-bg-content");
  $(this).closest(".single-class").toggleClass("grey-bg");
  var elem = $(this).closest(".single-class")[0];
  if(document.getElementById("these-are-checked").contains(elem)){
    document.getElementById("these-are-unchecked").appendChild(elem);
  }else{
    document.getElementById("these-are-checked").appendChild(elem);
  }
}

var checkedAssign = 0;

function uncheckIt(){
  var that      = $(this)[0];
  var soString  = "#these-are-so-checked";
  var notString = "#these-are-not-checked";
  var ctElem    = $(this).closest(".contention")[0];
  var scElem    = $(this).closest(".single-class")[0];
  var firsty    = $("#these-are-not-checked").children(':first-child')[0];
  if($(scElem).hasClass("grey-bg")){
    checker(ctElem, scElem, notString);
  }else{
    if((checkedAssign === 0) && (firsty !== scElem)){
      $('.bs-example-modal-sm').modal('show');
      $(".seq-confirm").unbind().click(function(){
        checkedAssign = 1;
        checker(ctElem, scElem, soString);
      });
      $(".seq-cancel").unbind().click(function(){
        $(that).parent('label').removeClass('input_checked');
        $(that).removeAttr('checked');
      });
    }else{
      checker(ctElem, scElem, soString);
    }
  }
}

function checker(content, elem, string){
  var array  = $(string).find(".numberz");
  var value  = $(elem).find(".numberz")[0].innerHTML;
  if(array.length === 0){
    $(string).append($(elem));
  }else{
    for(var i = 0; i < array.length; i++){
      var digit = array[i].innerHTML;
      if(value < digit){
        var under = $(array[i]).closest(".single-class")[0];
        $(under).before($(elem));
        break;
      }else if((value > digit) && (i === array.length - 1)){
        var over = $(array[i]).closest(".single-class")[0];
        $(over).after($(elem));
        break;
      }
    }
  }
  $(content).toggleClass("grey-bg-content");
  $(elem).toggleClass("grey-bg");
}
