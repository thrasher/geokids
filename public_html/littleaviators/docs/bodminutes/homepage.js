$.fn.gatewayMarquee = ( function() {

  function plugin(knownPossibilities, unknownPossibilities, qs, toggleElements) {

		if(typeof(discover) === 'undefined') {
			window.discover = {};
		}
		
		if (!Array.indexOf) {
	  		Array.prototype.indexOf = function(obj){
	   			for(var i=0; i<this.length; i++){
	    			if(this[i]==obj){
	     				return i;
	    			}
	   			}
	   			return -1;
	  		}
		}

		discover.homepage = (function() {
	
			$('html').removeClass('no-js');
			
			var marqWrapper = $('#marquee-wrapper');
			
			marqWrapper.addClass('spinner');
	
			//store and update cookie data here
			var cookieData = {
					'site' : 'select'
			};
		
			var createCookie = function(name,string,days) {
				if (days) {
					var date = new Date();
					date.setTime(date.getTime()+(days*24*60*60*1000));
					var expires = "; expires="+date.toGMTString();
				}
				else var expires = "";
				document.cookie = name + "=" + string +expires+"; path=/";
			};

			var readCookie = function(name) {
				var nameEQ = name + "=";
				var ca = document.cookie.split(';');
				for(var i=0;i < ca.length;i++) {
					var c = ca[i];
					while (c.charAt(0)==' ') c = c.substring(1,c.length);
					if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
				}
				return null;
			};

			var eraseCookie = function(name) {
				createCookie(name,"",-1);
			};
	
			//global form variables
			var loginForm = $('#form-login');
			var remember = $('#login-remember');
			var accountId = $('#login-account');
			var loginButton = $('#login-button');
			var loginInput = $('#login-password');
			var passwordShim = $('#password-shim');
			var customDropDiv = $("#customDropdown");
			var hiddenInput = customDropDiv.find("input")[0];
			var optionDiv = customDropDiv.find("ul")[0];
			var header = customDropDiv.find("p")[0];
			var listItems = $(optionDiv).find("li");
			var tooltipError = $('#dropdown-error');
			var selector = customDropDiv.find("a")[0];
			var arrowTooltips = $('.arrow-tooltip');

			var $listItemsAs = $($(listItems).find('a'));
	
			passwordShim.focus(function(){
				$(optionDiv).addClass('hide');
			});
	
			accountId.bind('keydown', function(e){
				if(e.keyCode === 32) {
					e.preventDefault();
				}
			});
	
			var setTooltips = function() {
				var overlayTriggers = $(".overlay-trigger");
				overlayTriggers.each(function() {
					$(this).click(function(e) {
						e.preventDefault();
						var offset = $(e.target).offset();
						var whichOverlay = this.href.split('#')[1];
						whichOverlay = $("#" + whichOverlay);
						whichOverlay.css({top: offset.top +0, left: offset.left + 18});
						whichOverlay.show();
					});
				});
		
				var overlayClosers = $(".close-button");
				overlayClosers.each(function() {
					$(this).click(function(e) {
						e.preventDefault();
						var getOverlay = $(this).parents(".small-tooltip");
						getOverlay.hide();
					});
				});
			};
	
	
			var setPlaceholders = function() {
				var i = document.createElement('input');
				var placehldrSupport = true;
				var allInputs = $("input");
		
				if ('placeholder' in i) {
					return;
				}
				else {
					placehldrSupport = false;
				};

				allInputs.each(function(){
					var input = $(this);
					//password field has special treatment because of type setting
					if (input.hasClass('password')) {
						return;
					}
					else {
						var placeholderText = input.attr('placeholder');
						if (placehldrSupport === false) {
							if (input.val() === '') {
								input.val(placeholderText);
							}
						}
			
						input.focus(function(){
							if($(this).val()=="User ID") input.val('');
							if ((this.id === 'login-account') && ($(this).hasClass('error'))) {
								$('#userId-error').hide();
								$(this).removeClass('error');
							}
						});
			
						input.blur(function() {
							if (input.val() === '') {
								input.val(placeholderText);
							}
						});
					}
				});
			};
	
	var setPassword = function () {
		passwordShim.focus(function() {
			passwordShim.removeClass('error');
			$('#password-error').hide();
			passwordShim.hide();
			loginInput.val('');
			loginInput.show();
			loginInput.focus();
		});
		
		
		loginInput.blur(function() {
			if(loginInput.val() === '') {
				passwordShim.show();
				loginInput.hide();
			}
		});
		loginInput.focus(function() {
			if(loginInput.val() === '') {
				loginInput.val('');
			}
		})
	};
	
	var formRollover = function () {
		var buttonSrc = '';

		$(loginButton).bind('mouseover', function() {
			buttonSrc = $(this).attr('src');
			var match = buttonSrc.match(/\.[a-zA-Z]+$/);
			$(this).attr('src',buttonSrc.replace(match[0], '-on' + match[0]));
		});
		$(loginButton).bind('mouseout', function() {
			$(this).attr('src',buttonSrc);
		});
	};
	
	
	var customDropDown = function() {
		$(customDropDiv).removeClass('hide');
		$(hiddenInput).val(cookieData.site);
		
		var setDropDown = function () {
			var setElements = function (cardType, cardText, cardObj, hideInput){
				$(optionDiv).addClass('hide');
				if(!remember.is(':checked'))
					{
						accountId.focus();
					}
				if (cookieData.site === cardType) {
					$(header).text(cardText);
					updateForm(cardType);
					
					if (hideInput === true) {
						passwordShim.hide();
						loginInput.hide();
					}
					
					if ((cardObj) && (cardObj !== '')) {
						$(accountId).val(cardObj);
						$(remember).attr('checked', true);
						passwordShim.focus();
					}
				}
			};
			
			setElements('card','Discover Card', cookieData.cid, false);
			setElements('bank','Banking', cookieData.bid, false);
			setElements('studentLoans','Student Loans', cookieData.sid, true);
			setElements('personalLoans','Personal Loans', cookieData.lid, false);
			setElements('homeLoans','Home Loans', cookieData.hid, false);
		};

		setDropDown();
		
		var resetDropDown = function() {
			$(optionDiv).removeClass('hide');
			$(customDropDiv).removeClass('error');
			
			if (loginInput.val() === '') {
				passwordShim.show();
				loginInput.hide();
			}
			else {
				passwordShim.hide();
				loginInput.show();
			}
			
			tooltipError.hide();
			offClick();
		};
		
		$(selector).focus(function() {
			resetDropDown();
			
			//for Personal Loans, don't show the password field
			if(customDropDiv.find('p').html() === 'Student Loans') {
				passwordShim.hide();
				loginInput.hide();
			}
		});
		
		$(customDropDiv).click(function(e){
			var target = $(e.target);
			var parent = $(target).parent();
			
			e.preventDefault();
			resetDropDown();
			
			if ((target.context.nodeName === "A") && (parent[0].tagName === "LI")) {
				var value = $(target).text();
				var rel = $(target).attr('rel');
				
				if (rel === "studentLoans") {
					$('#password-error').hide();
					passwordShim.removeClass('error');
				}
				
				updateForm(rel);
				
				cookieData.site = rel;
				$(remember).attr('checked', false);
								
				setDropDown();

				if (value !== "Select an Account") {
					$(hiddenInput).val(rel);
				}
				else {
					$(header).text('Select an Account');
					$(hiddenInput).val('');
				}
				
				$(document.body).unbind('click');
			}
			
			//for Personal loans, don't show the password field
			if(customDropDiv.find('p').html() === 'Student Loans') {
				passwordShim.hide();
				loginInput.hide();
			}
		});
				
		$(listItems).each(function() {
			var link = $(this).find('a')[0];
			$(link).focus(function(){
				$(this).addClass('cssFocus');
			});
			
			$(link).blur(function() {
				$(this).removeClass('cssFocus');
			});
			
			$(link).mouseenter(function(){
				$listItemsAs.removeClass('cssFocus');
				$(this).addClass('cssFocus');
			});
			
			$(link).mouseleave(function(){				
				$(this).removeClass('cssFocus');
			});			
		});
		
		
		var offClick = function() {
			$(document.body).bind('click', function(e){
				var target = $(e.target);
				var parent = $(target).parents("#customDropdown");
				if (parent.length === 0) {
					$(optionDiv).addClass('hide');
					$(document.body).unbind('click');
				}
			})
		};
		
		$(document).bind('keydown', function(e){
			if (!$(optionDiv).hasClass('hide')) {
				e.preventDefault();
				
				var keypressed = e.keyCode;
				
				var $highlighted = $($(listItems).find('a.cssFocus')[0]);
				
				if ($highlighted.length == 1) {
					var hindex = $listItemsAs.index($highlighted);
					
					//enter
					if (keypressed == 13) {
						$highlighted.trigger('click');
						$highlighted.removeClass('cssFocus');
					} else if (keypressed == 38) { //up arrow
						
						if (hindex != 0) {
								$highlighted.removeClass('cssFocus');
								$listItemsAs.eq(hindex - 1).addClass('cssFocus');
						} 
						return false;
					} else if (keypressed == 40) { //down arrow
						if (hindex != $listItemsAs.length -1) {
							$highlighted.removeClass('cssFocus');
							$listItemsAs.eq(hindex + 1).addClass('cssFocus');
						} 
						return false;	
					}
				} else {
					if (keypressed == 40) { //down arrow
						$listItemsAs.eq(0).addClass('cssFocus');
						return false;
					}
				}
			}
		});
	};
	
	//updates Form action url and input maxlengths
	var updateForm = function(rel){
		accountId.attr('name','userID');
		remember.attr('name','rememberId');
		loginInput.attr('name','password');
		if (rel === "card") {
			loginForm.attr('action','signin.php')
			remember.attr('name','rememberOption');
			
			/*accountId.attr('maxLength',16);
			loginInput.attr('maxLength',10);*/
		} 
		else if (rel === "bank" || rel === "personalLoans") {
			loginForm.attr('action','signin.php')
			
			/*accountId.attr('maxLength',20);
			loginInput.attr('maxLength',32);*/
		}
		else {
			if (rel === "studentLoans") {
				accountId.attr('name','userName');
				loginForm.attr('action','signin.php');
			}
			else if (rel === "homeLoans") {
				accountId.attr('name','UserName');
				loginInput.attr('name','Password');
				loginForm.attr('action','signin.php');
			}
			
			/*accountId.removeAttr('maxLength');
			loginInput.removeAttr('maxLength');*/
		}
	};
	
	var showSelectError = function() {
		$(header).text('Select an Account');
		var offset = $(customDropDiv).offset();
		$(customDropDiv).addClass('error');
		tooltipError.css({top: offset.top -5, left: offset.left + 189});
		tooltipError.show();
		$(hiddenInput).val('');
	};
	
	var setCookie = function() {
		$(loginForm).submit(function(e){
				$(arrowTooltips).hide();
				var checkInputs = function(input,badValue,errorID,targetInput) {
					var inputVal = input.val();
					if ((inputVal === '') || (inputVal === badValue)) {
						e.preventDefault();
						var inputOffset = $(targetInput).offset();
						$(targetInput).addClass('error');
						var whichError = $("#"+errorID);
						whichError.css({top: inputOffset.top -5, left: inputOffset.left + 189});
						whichError.show();
					}
				};


			if (cookieData.site !== 'studentLoans') {
					checkInputs(loginInput, 'Password','password-error', passwordShim);
				};
				checkInputs(accountId,'User ID','userId-error', accountId);

				if (cookieData.site === "select") {
					e.preventDefault();
					showSelectError();
					return;
				}

				else {
					//eraseCookie('LLID');
					var isChecked = false;
					if (remember.is(':checked')){
						isChecked = true;
					}
					var idValue = accountId.val();

					//if the userid looks like a credit card, don't store it in a cookie
					/*var creditCardNum = /^6011/;
					if(idValue.search(creditCardNum) != '-1') {
						return;
					}*/
					//if the userid looks like a credit card, don't store it in a cookie
					/*var creditCardNum = /^6011/;
					if(idValue.search(creditCardNum) != '-1') {
						return;
					}*/
					//if user attempts to log in to a site, update the username for that site to
					//either 'the data' or 'blank' to retain record that they logged in - to cookieData object
					var creditCardNum = /^6011/;
					if (cookieData.site === "card"){
						if (isChecked === true && idValue.search(creditCardNum) == '-1') {
							cookieData.cid = idValue;
						}
						else {
							cookieData.cid = '';
						}
					}

					else if (cookieData.site === "bank" && idValue.search(creditCardNum) == '-1'){
						if (isChecked === true) {
							cookieData.bid = idValue;
						}
						else {
							cookieData.bid = '';
						}
					}

					else if (cookieData.site === "personalLoans" && idValue.search(creditCardNum) == '-1'){
						if (isChecked === true) {
							cookieData.lid = idValue;
						}
						else {
							cookieData.lid = '';
						}
					}
					else if (cookieData.site === "studentLoans" && idValue.search(creditCardNum) == '-1'){
						if (isChecked === true) {
							cookieData.sid = idValue;
						}
						else {
							cookieData.sid = '';
						}
					}
					else if (cookieData.site === "homeLoans" && idValue.search(creditCardNum) == '-1'){
						if (isChecked === true) {
							cookieData.hid = idValue;
						}
						else {
							cookieData.hid = '';
						}
					}
					var string = '';
					for (i in cookieData) {
						string = string + (i + "=" + cookieData[i] + "|");
					}
					if(!readCookie('LLID') || $("#login-remember").attr("checked"))
					createCookie('LLID',string,365);
				};
			
		});
	};
	
	var checkCookie = function() {
				var LLID = readCookie('LLID');
				var MARQ = readCookie('MARQ');
				marqWrapper.removeClass('spinner');
				
				var possibilities;
				
				//pick which list to use based on whether cookie is set
				if (LLID) {
					possibilities = knownPossibilities;
				} else {
					possibilities = unknownPossibilities;
				}
				
				//add marquees from list as rotation marquees
				$.each(possibilities, function(i) {
					$('#'+possibilities[i]).addClass('in-rotation');
				});
				
				/*
				* Marquee fader script
				*/
		
				var currentIndex	= 0;
				var newIndex 		= -1;
				var pause 			= 8000;
				var pauseSafe		= 3000;
				var duration		= 750;	
				var timeout 		= null;
				var marquees 		= null;
				var total 			= null;
				
				//example to show how to stop animation 
				$("#test").bind('focus', function (){
					pauseTransition();
				})
				
				//example to show how to restart animation
				$("#test").bind('focusout', function (){
					restartTransition();
				})

				marquees = $(".main-marquee.in-rotation");
				/*
				* Run all necessary tasks to set up Marquees
				*/
				var initMarquees = function() {
					
					total = marquees.size() ;

					//make sure all blades are initially hidden
					marquees.each(function(index) {
						$(this).css('display', 'none');
					});
					
					//hide wrapper element initially
					marqWrapper.hide();

				};

				/*
				* Creates navigation based on the number of elements
				*/
				var buildMarqueeNav = function () {

					$("#marquee-nav").hide();
					for (i = 0; i < total; i++){
						$("#marquee-nav ul").append('<li><a href="#"></a></li>\n');
					}
					$("#marquee-nav li").eq(currentIndex).addClass('active');
					$("#marquee-nav").fadeIn(duration);
					
					$("#marquee-nav ul li").bind('click', function (e){
						e.preventDefault();
						
						//cancel existing animation
						clearTimeout(timeout)
						
						//get index of new marquee to load
						newIndex = $("#marquee-nav li").index($(this));
					
						//run final animation
						stopTransition();
						
						//update our bg image
						updateMarqueeNav(newIndex);
					});
				}

				/* 
				* Update highlighted nav element
				*/
				var updateMarqueeNav = function (index) {
					$("#marquee-nav ul li").removeClass('active');
					$("#marquee-nav ul li").eq(index).addClass('active');
				}
				
				/*
				* Updates bg image of marquee element
				*/
				var updateMarqueeBg = function (index) {
					
					//get ID of current marquee
					var currentID = $(marquees[index]).attr("id");
					
					//update #main-content and #marquee-wrapper (need both for CSS) with current marquee ID
					//this updates the background				
					marqWrapper.removeClass();
					marqWrapper.addClass(currentID);
				}
				
				/*
				*	Run Transitions
				*/
				var runTransition = function () {
		
					updateMarqueeBg(currentIndex);
					$(marquees[currentIndex]).show();
					marqWrapper.fadeIn(duration);
					
					timeout = setTimeout(function(){
						marqWrapper.fadeOut(duration,
							function() {
								$(marquees[currentIndex]).hide();
								if(currentIndex == (total - 1)) {
									currentIndex = 0;
								}else{
									currentIndex++;	
								}
								$(marquees[currentIndex]).show();
								updateMarqueeNav(currentIndex);

								setTimeout(runTransition,0);
							
							});
					},pause);
				}
				

				/*
				*	Stop Transitions
				*/
				var stopTransition = function () {
					marqWrapper.fadeOut(duration);
					setTimeout(function(){
						$(marquees[currentIndex]).hide();
						updateMarqueeBg(newIndex);	
						updateMarqueeNav(newIndex);
						$(marquees[newIndex]).show();
						marqWrapper.fadeIn(duration);
						currentIndex = newIndex;
					},duration);
				
				}
				
				/*
				*	Pause Transitions
				*/
				var pauseTransition = function () {
					clearTimeout(timeout);
					
				}
				discover.pauseMarquee = pauseTransition;
				
				/*
				*	Restart Transitions
				*/
				var restartTransition = function () {
					timeout = setTimeout(function(){							
						marqWrapper.fadeOut(duration,
							function() {
								$(marquees[currentIndex]).hide();
								if(currentIndex == (total - 1)) {
									currentIndex = 0;
								}else{
									currentIndex++;	
								}
								$(marquees[currentIndex]).show();
								updateMarqueeNav(currentIndex);

								setTimeout(runTransition,0);
							
							});
					},pause);
				}
				
				//only run animation if we have more than one marquee
				if(marquees.size() > 1){
					initMarquees();
					buildMarqueeNav();
					runTransition();
				} else {
					marqWrapper.addClass(marquees[0].id);
					marquees.show();
				}

		new Image().src="//discovercard.com/images/zag.gif?log=1&cb="+new Date().getTime()/1000+"&dt=Discover%20Home%20Page&dl=/root/discover/"+((MARQ)? ((LLID) ? 'kwn' : 'unk') : 'unk')+"&dd=www.discover.com&dr="+escape(document.referrer).replace(/\+/g, "%2B");				
				var currentMarquee = $('#main-content').attr('class'),
				disclosure = $('.disclosure');
				for (var i = 0; i < disclosure.length; i++) {
					$(disclosure[i]).hide();
					if ($(disclosure[i]).hasClass(currentMarquee)) {
						$(disclosure[i]).show();
					}
				};

				var placement = $('.placement');
				for (var i = 0; i < placement.length; i++) {
					$(placement[i]).hide();
					if ($(placement[i]).hasClass((LLID) ? 'known':'unknown')) {
						$(placement[i]).show();
					}
				};


				
				if (LLID) {
					var number = LLID.indexOf('|');
					var site = LLID.substring(5, number);//site(4) +1
					cookieData.site = site;
					var preservedCookieData = LLID.substring(number + 1);
					var ids = preservedCookieData.split('|');
					ids.pop();
					for (var i = 0; i<ids.length; i++) {
						var data = ids[i].split("=");
						cookieData[data[0]] = data[1];
					}
				}		
		
		//for testing/review purpose
		$('#login-button').click(function() {	
			if(cookieData.site === "studentLoans")	loginForm.attr('action','https://www.discoverstudentloans.com/MFA/EnterUsername.aspx?ReturnUrl=http://www.discoverstudentloans.com/THEOOnline/login.asp?DEST=THEO&Username='+accountId.val());
		});
	
	
			};
			$(document).ready(function(){
				
				checkCookie();
				setTooltips();
				setPlaceholders();
				setPassword();
				customDropDown();
				setCookie();
				formRollover();

	});
	
	
})();
  }

  return plugin;
}() );
