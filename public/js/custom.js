/*window.onbeforeunload = function () {
	RESET_LUNGCHECK_SCORE();
};*/
Date.prototype.monthNames = [
	"January", "February", "March",
	"April", "May", "June",
	"July", "August", "September",
	"October", "November", "December"
];
$(document).ready(function () {
	if ('serviceWorker' in navigator) {
		window.addEventListener("load", function () {
			navigator.serviceWorker
				.register('/service-worker.js');
		})
	}
});
Date.prototype.getMonthName = function () {
	return this.monthNames[this.getMonth()];
};
Date.prototype.getShortMonthName = function () {
	return this.getMonthName().substr(0, 3);
};
$(window).on('popstate', function (event) {
	var URL = location.href;
	callAjax(URL);
});
$(document).ready(function () {
	var URL = location.href;
	if(URL.includes('lungage/assessment/results')){
		calculateLungAgeResults();
	}
	getResults();
	callCustomJs(URL);
	RESET_LUNGCHECK_SCORE();
	$('body').addClass('loaded');
});
$(document).on('click', ".register-btn", function () {
	if ($('#non-reg-modal').length) {
		$('#non-reg-modal').hide();
	}
});
$(document).on('click', ".home-link1", function () {
	$(this).parents('.assesment').next().addClass('active').siblings().removeClass('active');
});
$(document).on('click', '#data-modal-link', function () {
	$("#data-modal").show();
});
$(document).on('click', ".prev-link1", function () {
	$(this).parents('.assesment').prev().addClass('active').siblings().removeClass('active');
});
$(document).on('click', 'a[href^="#"]', function () {
	// update the URL in location bar
	if ($(this).attr('href') != '#') {
		window.location.hash = $.attr(this, 'href').substr(1);
	}
	return false;
});
$(document).on('click', 'a.cookie-check', function (e) {
	var URL = APP_URL + '/' + $(this).data('for');
	$('.accept-terms').attr('data-url', URL);
	if (typeof $.cookie("terms-accepted") == 'undefined') {
		$('#term-condition-modal').show();
	} else {
		/*if ($(this).data('for') == 'lungage') {
			window.location.href = '/lungage';
		} else {
			callAjax(URL, $(this));
		}*/
		callAjax(URL, $(this));
	}
});
$(document).on('click', '#download_lungcheck_report', function () {
	$('body').removeClass('loaded');
	$.ajax({
		url: APP_URL + '/lungcheck/pdf',
		method: 'POST',
		data: { "test": 'test', '_token': $('meta[name="csrf-token"]').attr('content') },
		dataType: 'json',
		success: function (response) {
			//chartPdf();
			window.location.href = response.url;
			$.toast({
				heading: 'Success',
				text: 'PDF generated successfully',
				icon: 'success',
				loader: true,
			});
			$('body').addClass('loaded');
		},
		error: function (jqXHR, exception) {
			var msg = '';
			if (jqXHR.status === 0) {
				msg = 'Not connect.\n Verify Network.';
			} else if (jqXHR.status == 404) {
				msg = 'Requested page not found. [404]';
			} else if (jqXHR.status == 500) {
				msg = 'Internal Server Error [500].';
			} else if (exception === 'parsererror') {
				msg = 'Requested JSON parse failed.';
			} else if (exception === 'timeout') {
				msg = 'Time out error.';
			} else if (exception === 'abort') {
				msg = 'Ajax request aborted.';
			} else {
				msg = 'Uncaught Error.\n' + jqXHR.responseText;
			}
			$.toast({
				heading: 'Error',
				text: 'User ID not supported, please check your spelling',
				icon: 'error',
				loader: true,
			});
			$('body').addClass('loaded');
		}
	});
});
$(document).on('click', '.accept-terms', function () {
	$.cookie("terms-accepted", true, { expires: 365 });
	var URL = $(this).data('url');
	callAjax(URL, $(this));
	$('#term-condition-modal').hide();
});
$(document).on('click', '.decline-terms', function () {
	$('#term-condition-modal').hide();
});
$(document).on('click', '.ajax_anchor', function (e) {
	e.preventDefault();
	var $this = $(this);
	var URL = $this.prop('href');
	callAjax(URL, $this);
});
$(document).on("keypress keyup keydown paste", "#lungage-report-modal #user-id", function () {
	var lung_age_accept = $("#lung_age_accept:checked").val();
	//alert(lung_age_accept);
	if (validateEmail($(this).val()) && lung_age_accept == 'on') {
		$('#lungage-userid-button').prop('disabled', false);
	} else {
		$('#lungage-userid-button').prop('disabled', true);
	}
});
$(document).on("change", "#lung_age_accept", function () {
	var lung_age_accept = $("#lung_age_accept:checked").val();
	//alert(lung_age_accept);
	if (validateEmail($("#lungage-report-modal #user-id").val()) && lung_age_accept == 'on') {
		$('#lungage-userid-button').prop('disabled', false);
	} else {
		$('#lungage-userid-button').prop('disabled', true);
	}
});
$(document).on('click', "#popup_cpod", function () {
	$('#cpod-report-modal').show();
});
$(document).on('click', '#lungage-userid-button', function () {
	$('body').removeClass('loaded');
	var application = getLocalStorageItems('application');
	var gender = application.application.lungage.results['gender'];
	var age = application.application.lungage.results['age'];
	var height = application.application.lungage.results['height'];
	var cigarettes = application.application.lungage.results['cigarettes'];
	var yearsSmoking = application.application.lungage.results['yearsSmoking'];
	var lung_age = application.application.lungage.lungAge;
	//alert(lung_age);
	var email = $("#lungage-report-modal #user-id").val();
	$.ajax({
		url: APP_URL + '/lungage/email',
		method: 'POST',
		data: { "gender": gender, 'age': age, 'height': height, 'cigarettes_per_day': cigarettes, 'smoking_years': yearsSmoking, 'lung_age': lung_age, '_token': $('meta[name="csrf-token"]').attr('content'), 'email': email, 'locale': 'en' },
		//dataType: 'json',
		success: function (response) {
			//window.location.href = response.url;
			$.toast({
				heading: 'Success',
				text: 'Report generated successfully',
				icon: 'success',
				loader: true,
			});
			$('#lungage-userid-form-wrapper').hide();
			$('#success-mail').show();
			$('body').addClass('loaded');
		},
		error: function (jqXHR, exception) {
			var msg = '';
			if (jqXHR.status === 0) {
				msg = 'Not connect.\n Verify Network.';
			} else if (jqXHR.status == 404) {
				msg = 'Requested page not found. [404]';
			} else if (jqXHR.status == 500) {
				msg = 'Internal Server Error [500].';
			} else if (exception === 'parsererror') {
				msg = 'Requested JSON parse failed.';
			} else if (exception === 'timeout') {
				msg = 'Time out error.';
			} else if (exception === 'abort') {
				msg = 'Ajax request aborted.';
			} else {
				msg = 'Uncaught Error.\n' + jqXHR.responseText;
			}
			$.toast({
				heading: 'Error',
				text: 'User ID not supported, please check your spelling',
				icon: 'error',
				loader: true,
			});
			$('body').addClass('loaded');
		}
	});
});
$(document).on("keypress keyup keydown paste", "#forgot-userid-form #email-id", function () {
	if (validateEmail($(this).val())) {
		$('#forgot-userid-button').prop('disabled', false);
		$('#lungage-userid-button').prop('disabled', false);
	} else {
		$('#forgot-userid-button').prop('disabled', true);
		$('#lungage-userid-button').prop('disabled', true);
	}
});
$(document).on("change keypress keyup keydown paste", ".register-form #email-id,.register-form #check_box", function () {
	if (checkEmailandCheckboxValid()) {
		$('#register-me-in').prop('disabled', false);
	} else {
		$('#register-me-in').prop('disabled', true);
	}
});
$(document).on("click", "#forgot-password", function () {
	$("#forgot-userid-modal").show();
});
$(document).on("click", ".forgot-password-close", function () {
	$("#forgot-userid-modal,#mail-sent-success").hide();
	$('#forgot-userid-form-wrapper').show();
	$('#forgot-userid-form #email-id').val('');
});
$(document).on("click", "#process-of-my-personal-data", function () {
	$('#data-processing-consent-modal').show();
});
$(document).on("click", ".data-processing-consent-close", function () {
	$('#data-processing-consent-modal').hide();
});
$(document).on("click", "#menuToolbox", function () {
	$(".menu-list").toggleClass("toolboxMenu");
});
$(document).on("click", "#term", function () {
	$(".term-condition-modal").show()
});
$(document).on("click", "#term-condition-close", function () {
	$(".term-condition-modal").hide()
});
$(document).on("click", "#menu-policy", function () {
	$(".privacy-modal").show()
});
$(document).on("click", "#privacy-close", function () {
	$(".privacy-modal").hide()
});
$(document).on("click", "#myBtn", function () {
	$(".non-reg-modal").show()
});
$(document).on("click", "#non-reg-close", function () {
	$(".non-reg-modal").hide()
});
$(document).on("click", "#myBtn1", function () {
	$("#new-assem-modal").show();
	if ($(this).parents('#menu-pop-up').length) {
		$('#menu-pop-up').hide();
	}
});
$(document).on("click", "#new-assem-close", function () {
	$("#new-assem-modal").hide()
});
$(document).on("click", "#what-modal-show", function () {
	$("#what-modal").show()
});
$(document).on("click", "#what-close", function () {
	$("#what-modal").hide()
});
$(document).on("click", "#data-modal-show", function () {
	$("#data-modal").show()
});
$(document).on("click", "#data-close", function () {
	$("#data-modal").hide()
});
$(document).on("click", "#average-score-modal-show", function () {
	$("#average-score-modal").show()
});
$(document).on("click", "#cpod-report-modal .close", function () {
	$("#cpod-report-modal").hide()
});
$(document).on("click", "#average-score-modal .close", function () {
	$("#average-score-modal").hide()
});
$(document).on("click", "#total-score-modal-show", function () {
	$("#total-score-modal").show()
});
$(document).on("click", "#total-score-modal .close", function () {
	$("#total-score-modal").hide()
});
$(document).on("keyup", ".login-form #user-id", function () {
	if ($(this).val()) {
		$('#log-me-in').prop('disabled', false);
	} else {
		$('#log-me-in').prop('disabled', true);
	}
});
$(document).on("click", "#forgot-userid-button,#resendMail", function (e) {
	e.preventDefault();
	$('body').removeClass('loaded');
	$.ajax({
		url: APP_URL + '/forgot',
		method: 'POST',
		data: $('#forgot-userid-form').serialize(),
		dataType: 'json',
		success: function (response) {
			$('#mail-sent-success').show();
			$('#forgot-userid-form-wrapper').hide();
			$('body').addClass('loaded');
		},
		error: function (jqXHR, exception) {
			var msg = '';
			if (jqXHR.status === 0) {
				msg = 'Not connect.\n Verify Network.';
			} else if (jqXHR.status == 404) {
				msg = 'Requested page not found. [404]';
			} else if (jqXHR.status == 500) {
				msg = 'Internal Server Error [500].';
			} else if (exception === 'parsererror') {
				msg = 'Requested JSON parse failed.';
			} else if (exception === 'timeout') {
				msg = 'Time out error.';
			} else if (exception === 'abort') {
				msg = 'Ajax request aborted.';
			} else {
				msg = 'Uncaught Error.\n' + jqXHR.responseText;
			}
			$.toast({
				heading: 'Error',
				text: 'Email address not known, please check your spelling',
				icon: 'error',
				loader: true,
			});
			$('body').addClass('loaded');
		}
	});
});
$(document).on("click", "#log-me-in", function (e) {
	e.preventDefault();
	$('body').removeClass('loaded');
	$.ajax({
		url: APP_URL + '/login',
		method: 'POST',
		data: { "code": $('.login-form #user-id').val(), '_token': $('meta[name="csrf-token"]').attr('content') },
		dataType: 'json',
		success: function (response) {
			sessionStorage.setItem("code", $('.login-form #user-id').val());
			$.toast({
				heading: 'Success',
				text: 'Logged in successfully',
				icon: 'success',
				loader: true,
			});
			$('.register-btn').hide();
			$('#header-welcome-div').html('Welcome – ' + $('.login-form #user-id').val());
			// var URL = APP_URL+'/'+LANG;
			callAjax(APP_URL);
			$('body').addClass('loaded');
			$('.login-link').hide();
			$('.welcome-message').show();
		},
		error: function (jqXHR, exception) {
			var msg = '';
			if (jqXHR.status === 0) {
				msg = 'Not connect.\n Verify Network.';
			} else if (jqXHR.status == 404) {
				msg = 'Requested page not found. [404]';
			} else if (jqXHR.status == 500) {
				msg = 'Internal Server Error [500].';
			} else if (exception === 'parsererror') {
				msg = 'Requested JSON parse failed.';
			} else if (exception === 'timeout') {
				msg = 'Time out error.';
			} else if (exception === 'abort') {
				msg = 'Ajax request aborted.';
			} else {
				msg = 'Uncaught Error.\n' + jqXHR.responseText;
			}
			$.toast({
				heading: 'Error',
				text: 'User ID not supported, please check your spelling',
				icon: 'error',
				loader: true,
			});
			$('body').addClass('loaded');
		}
	});
});
$(document).on("click", "#register-me-in", function (e) {
	e.preventDefault();
	$('body').removeClass('loaded');
	$.ajax({
		url: APP_URL + '/register',
		method: 'POST',
		data: { "email": $('.register-form #email-id').val(), '_token': $('meta[name="csrf-token"]').attr('content'), 'results': null },
		dataType: 'json',
		success: function (response) {
			if (response.status == 200) {
				$.toast({
					heading: 'Success',
					text: 'Registered successfully!',
					icon: 'success',
					loader: true,
					hideAfter: 4000,
				});
				$.toast({
					heading: 'Success',
					text: 'We have sent your User ID on the given email.',
					icon: 'success',
					loader: true,
					hideAfter: 10000,
				});
				var URL = APP_URL + '/login';
				callAjax(URL);
			} else {
				$.toast({
					heading: 'Error',
					text: response.message,
					icon: 'error',
					loader: true,
				});
			}
			$('body').addClass('loaded');
		},
		error: function (jqXHR, exception) {
			var msg = '';
			if (jqXHR.status === 0) {
				msg = 'Not connect.\n Verify Network.';
			} else if (jqXHR.status == 404) {
				msg = 'Requested page not found. [404]';
			} else if (jqXHR.status == 500) {
				msg = 'Internal Server Error [500].';
			} else if (exception === 'parsererror') {
				msg = 'Requested JSON parse failed.';
			} else if (exception === 'timeout') {
				msg = 'Time out error.';
			} else if (exception === 'abort') {
				msg = 'Ajax request aborted.';
			} else {
				msg = 'Uncaught Error.\n' + jqXHR.responseText;
			}
			$.toast({
				heading: 'Error',
				text: 'Something went wrong',
				icon: 'error',
				loader: true,
			});
			$('body').addClass('loaded');
		}
	});
});
$(document).on("click", "#copd-modal-show", function (e) {
	e.preventDefault();
	$(".copd-modal").show();
});
$(document).on("click", "#copd-close", function () {
	$('.copd-modal').hide();
});
$(document).on('click', '.tablinks', function () {
	$('.tab .tablinks').each(function () {
		$(this).removeClass('active');
	});
	$(this).addClass('active');
	var type = $(this).data('type');
	$('.tabcontent h3').html((type != 'functional' && type != 'mental') ? type.toUpperCase() : type.toUpperCase() + ' STATUS').css('text-transform', 'uppercase');
	fetchGraphData(type);
});
$(document).on('change', 'input[name="gender"]', function () {
	var application = {
		application: {
			lungage: {
				actualAge: 0,
				lungAge: 0,
				results: {
					gender: $(this).val()
				}
			}
		}
	};
	setLocalStorageItems('application', application);
});
$(document).on('click', '#download_lungage_report', function () {
	$('body').removeClass('loaded');
	var application = getLocalStorageItems('application');
	var gender = application.application.lungage.results['gender'];
	var age = application.application.lungage.results['age'];
	var height = application.application.lungage.results['height'];
	var cigarettes = application.application.lungage.results['cigarettes'];
	var yearsSmoking = application.application.lungage.results['yearsSmoking'];
	var lung_age = application.application.lungage.lungAge;
	$.ajax({
		url: APP_URL + '/lungage/pdf',
		method: 'POST',
		data: { "gender": gender, 'age': age, 'height': height, 'cigarettes_per_day': cigarettes, 'smoking_years': yearsSmoking, 'lung_age': lung_age, '_token': $('meta[name="csrf-token"]').attr('content') },
		dataType: 'json',
		success: function (response) {
			window.location.href = response.url;
			$.toast({
				heading: 'Success',
				text: 'PDF generated successfully',
				icon: 'success',
				loader: true,
			});
			$('body').addClass('loaded');
		},
		error: function (jqXHR, exception) {
			var msg = '';
			if (jqXHR.status === 0) {
				msg = 'Not connect.\n Verify Network.';
			} else if (jqXHR.status == 404) {
				msg = 'Requested page not found. [404]';
			} else if (jqXHR.status == 500) {
				msg = 'Internal Server Error [500].';
			} else if (exception === 'parsererror') {
				msg = 'Requested JSON parse failed.';
			} else if (exception === 'timeout') {
				msg = 'Time out error.';
			} else if (exception === 'abort') {
				msg = 'Ajax request aborted.';
			} else {
				msg = 'Uncaught Error.\n' + jqXHR.responseText;
			}
			$.toast({
				heading: 'Error',
				text: 'User ID not supported, please check your spelling',
				icon: 'error',
				loader: true,
			});
			$('body').addClass('loaded');
		}
	});
});
$(document).ajaxComplete(function (event) {
	//checkLocalStorage();
});
$(document).on('click', '#privacy_statement_button', function () {
	$('#privacy_statement-modal').show();
});
$(document).on('click', '#term_of_use_button', function () {
	$('#term_of_use-modal').show();
});
$(document).on('click', '#imprint_button', function () {
	$('#imprint-modal').show();
});
$(document).on('click', '.modal-close', function () {
	$(this).parents('.modal').hide();
});
async function mergeAllPDFs(urls) {
	const pdfDoc = await PDFLib.PDFDocument.create();
	const numDocs = urls.length;
	for (var i = 0; i < numDocs; i++) {
		const donorPdfBytes = await fetch(urls[i]).then(res => res.arrayBuffer());
		const donorPdfDoc = await PDFLib.PDFDocument.load(donorPdfBytes);
		const docLength = donorPdfDoc.getPageCount();
		for (var k = 0; k < docLength; k++) {
			const [donorPage] = await pdfDoc.copyPages(donorPdfDoc, [k]);
			//console.log("Doc " + i+ ", page " + k);
			pdfDoc.addPage(donorPage);
		}
	}
	await pdfDoc.save();
	const pdfDataUri = await pdfDoc.saveAsBase64({ dataUri: true });
	const downloadLink = document.createElement("a");
	const fileName = "MyReport.pdf";
	downloadLink.href = pdfDataUri;
	downloadLink.download = fileName;
	downloadLink.click();
	// strip off the first part to the first comma "data:image/png;base64,iVBORw0K..."
	/*var data_pdf = pdfDataUri.substring(pdfDataUri.indexOf(',')+1);
	console.log(data_pdf);*/
}
function checkEmailandCheckboxValid() {
	return validateEmail($('.register-form #email-id').val()) && $('.register-form #check_box').is(':checked');
}
function validateEmail(email) {
	const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return re.test(String(email).toLowerCase());
}
function checkChecbox(){
	lungCheckScore = {
				p1q1: 4,
				p1q2: 4,
				p1q3: 4,
				p1q4: 4,
				p2q1: 4,
				p2q2: 4,
				p3q1: 4,
				p3q2: 4,
				p3q3: 4,
				p3q4: 4,
				p4q1: 4,
				p4q2: 4,
				p4q3: 4,
				p4q4: 4
			};
	$.each(lungCheckScore, function (i, item) {
		if($("#form_assessment ."+i).length){
			var arrObj = JSON.parse(localStorage.getItem("LungCheck"));
			var assess = arrObj['lungCheckScore'][i];
			$("#form_assessment input[value='" + assess + "']").prop('checked', true);
		}
	});
}
function callAjax(URL, $this = null) {
	if (URL != 'javascript:;' && URL != '#') {

		if ($("#form_assessment").length > 0 && $this.html()=='NEXT <i class="arrow1 right"></i>') {
			//alert($this.html());
			lungCheckScore = {
				p1q1: 4,
				p1q2: 4,
				p1q3: 4,
				p1q4: 4,
				p2q1: 4,
				p2q2: 4,
				p3q1: 4,
				p3q2: 4,
				p3q3: 4,
				p3q4: 4,
				p4q1: 4,
				p4q2: 4,
				p4q3: 4,
				p4q4: 4
			};
			$.each(lungCheckScore, function (i, item) {
				if ($('input[type="range"]').data('step') == i) {
					var value = 0;
					if (lungCheckScore[i] == 1) {
						value = 14;
						if (!$('input[data-question]').length) {
							document.getElementById("selected-result").innerHTML = "NEVER";
						} else {
							document.getElementById("selected-result").innerHTML = "NOT LIMITED AT ALL";
						}
					} else if (lungCheckScore[i] == 2) {
						value = 29;
						if (!$('input[data-question]').length) {
							document.getElementById("selected-result").innerHTML = "HARDLY EVER";
						} else {
							document.getElementById("selected-result").innerHTML = "VERY SLIGHTLY LIMITED";
						}
					} else if (lungCheckScore[i] == 3) {
						value = 44;
						if (!$('input[data-question]').length) {
							document.getElementById("selected-result").innerHTML = "A FEW TIMES";
						} else {
							document.getElementById("selected-result").innerHTML = "SLIGHTLY LIMITED";
						}
					} else if (lungCheckScore[i] == 4) {
						value = 50;
						if (!$('input[data-question]').length) {
							document.getElementById("selected-result").innerHTML = "SEVERAL TIMES";
						} else {
							document.getElementById("selected-result").innerHTML = "LIMITED";
						}
					} else if (lungCheckScore[i] == 5) {
						value = 74;
						if (!$('input[data-question]').length) {
							document.getElementById("selected-result").innerHTML = "MANY TIMES";
						} else {
							document.getElementById("selected-result").innerHTML = "MODERATELY LIMITED";
						}
					} else if (lungCheckScore[i] == 6) {
						value = 89;
						if (!$('input[data-question]').length) {
							document.getElementById("selected-result").innerHTML = "A GREAT MANY TIMES";
						} else {
							document.getElementById("selected-result").innerHTML = "EXTREAMLY LIMITED";
						}
					} else {
						value = 100;
						if (!$('input[data-question]').length) {
							document.getElementById("selected-result").innerHTML = "CONSTANTLY";
						} else {
							document.getElementById("selected-result").innerHTML = "TOTALLY LIMITED";
						}
					}
					$('input[type="range"]').val(value);
				}
			});
			//setLocalStorageItems("LungCheck", { 'lungCheckScore': lungCheckScore });
		}
		/*if($this && $this.parents('.prev-button').length){
			$('#content').removeClass('bounceInRight bounceInLeft bounceOutLeft').addClass('bounceOutRight');
		}else{
			$('#content').removeClass('bounceInRight bounceOutRight bounceInLeft').addClass('bounceOutLeft');
		}*/
		$.ajax({
			url: URL,
			success: function (response) {
				if ($this && ($this.parents('#menulist1').length || $this.parents('#menulist2').length || $this.parents('#menulist3').length)) {
					$("#menu-pop-up").hide();
				}
				if (typeof response.url !== 'undefined') {
					$.toast({
						heading: 'Error',
						text: response.message,
						icon: 'error',
						loader: true,
					});
					callAjax(response.url);
				} else {
					if ($this && $this.parents('#new-assem-modal').length) {
						$("#new-assem-modal").hide();
					}
					if ($this && $this.hasClass('logout')) {
						localStorage.removeItem('dynamic_graph');
						localStorage.removeItem('total_dynamic_graph');
						$('#header-welcome-div').html('<a href="' + APP_URL + '/login' + '" class="ajax_anchor" data-for="login">REGISTER / LOGIN</a>');
						callAjax(APP_URL);
						$('.register-btn').show();
						return false;
					} else {
						var matches = response.match(/<title>(.*?)<\/title>/);
						$('title').html(matches[1]);
						$('#content').html($(response).find('.loaded_content'));
						$('#menu-pop-up').html($(response).filter('#menu-pop-up').html());
						if ($(response).find('#assessRange').length) {
							RESET_LUNGCHECK_SCORE();
						}
						history.pushState(false, false, URL);
					}
				}
				/*if($this && $this.parents('.prev-button').length){
					$('#content').removeClass('bounceInRight bounceOutRight bounceOutLeft').addClass('bounceInLeft');
				}else{
					$('#content').removeClass('bounceInLeft bounceOutRight bounceOutLeft').addClass('bounceInRight');
				}*/
				callCustomJs(URL);
			},
			error: function (jqXHR, exception) {
				var msg = '';
				if (jqXHR.status === 0) {
					msg = 'Not connect.\n Verify Network.';
				} else if (jqXHR.status == 404) {
					msg = 'Requested page not found. [404]';
				} else if (jqXHR.status == 500) {
					msg = 'Internal Server Error [500].';
				} else if (exception === 'parsererror') {
					msg = 'Requested JSON parse failed.';
				} else if (exception === 'timeout') {
					msg = 'Time out error.';
				} else if (exception === 'abort') {
					msg = 'Ajax request aborted.';
				} else {
					msg = 'Uncaught Error.\n' + jqXHR.responseText;
				}
				$.toast({
					heading: 'Error',
					text: msg,
					icon: 'error',
					loader: true,
				});
			}
		});
	}
}
function myMenu(e) {
	$("#menu-pop-up").show();
}
function myMenuClose(e) {
	$("#menu-pop-up").hide();
}
function callCustomJs(URL) {
	var last_part_of_url = URL.split(/[\\/]/).pop();
	/*var languages = ['benl','befr','dk','fi','se','en'];
	if(languages.includes(last_part_of_url)){
		LANG = last_part_of_url;
	}*/
	//alert(last_part_of_url);
	if (last_part_of_url == 'understanding-your-progress') {
		understandingYourProgress();
		//alert();
	}
	var URL = location.href;
	if(URL.includes('lungage/assessment/results')){
		calculateLungAgeResults();
	}
	checkChecbox();
	checkLocalStorage();
	if (last_part_of_url == '' || last_part_of_url == 'bi-lunglife.indegene.com' || last_part_of_url == 'nginx-lunglife-com-en-develop.bi-oneweb.com') {
		$('.lungage-bg').hide();
		$('.lungage-pic .lungage-pic-one').hide();
		$('.lungage-pic .lungage-pic-two').hide();
		$('.bg-img').hide();
		$('.breath_symbol_white').show();
		$('.new-assess-bg').hide();
		$('.login-bg').hide();
		$('.breath_symbol_white').addClass('home');
		$('.breath_symbol_white img').css({ 'padding': '10vh 10vw', 'max-width': '80vw', 'max-height': '80vh' });
		var srcset = $('.breath_symbol_white').find('source').data('srcset').replace('breath_symbol_white', 'breath_symbol_white-home');
	} else if (last_part_of_url == 'lungage') {
		$('.lungage-bg').show();
		$('.lungage-pic .lungage-pic-one').show();
		$('.lungage-pic .lungage-pic-two').show();
		$('.bg-img').hide();
		$('.breath_symbol_white').hide();
		$('.new-assess-bg').hide();
		$('.login-bg').hide();
		$('.lungage-bg').addClass('home');
	} else if (last_part_of_url == 'login' || last_part_of_url == 'register') {
		$('.lungage-bg').hide();
		$('.lungage-pic .lungage-pic-one').hide();
		$('.lungage-pic .lungage-pic-two').hide();
		$('.bg-img').hide();
		$('.breath_symbol_white').hide();
		$('.new-assess-bg').hide();
		$('.login-bg').show();
		// }else{
		// 	$('.login-bg').hide();
		// }
	} else if (last_part_of_url == 'lungcheck' || last_part_of_url == 'assessment') {
		$('.lungage-bg').hide();
		$('.lungage-pic .lungage-pic-one').hide();
		$('.lungage-pic .lungage-pic-two').hide();
		$('.new-assess-bg').show();
		$('.bg-img').hide();
		$('.login-bg').hide();
		$('.breath_symbol_white').hide();
		$('.breath_symbol_white').removeClass('home');
		$('.breath_symbol_white img').css({ 'padding': '0vw', 'max-width': '100vw', 'max-height': '100vh' });
		var srcset = $('.breath_symbol_white').find('source').data('srcset').replace('breath_symbol_white-home', 'breath_symbol_white');
	}
	// else if(last_part_of_url=='assessment'){
	// 	$('.login-bg').hide();
	// 	$('.new-assess-bg').hide();
	// 	$('.bg-img').show();
	// 	$('.breath_symbol_white').show();
	// 	$('.breath_symbol_white').removeClass('home');
	// 	$('.breath_symbol_white img').css({'padding': '0vw','max-width':'100vw','max-height':'100vh'});
	// 	var srcset = $('.breath_symbol_white').find('source').data('srcset').replace('breath_symbol_white-home','breath_symbol_white');
	// 	 $('.bg-img img').css('left','-50%');
	// }
	else if (last_part_of_url == 'your-score') {
		getResults();
		$('.lungage-bg').hide();
		$('.lungage-pic .lungage-pic-one').hide();
		$('.lungage-pic .lungage-pic-two').hide();
		$('.bg-img').hide();
		$('.breath_symbol_white').show();
		$('.new-assess-bg').hide();
		$('.login-bg').hide();
		$('.breath_symbol_white').show();
		$('.breath_symbol_white').removeClass('home');
		$('.breath_symbol_white img').css({ 'padding': '0vw', 'max-width': '100vw', 'max-height': '100vh' });
		var srcset = $('.breath_symbol_white').find('source').data('srcset').replace('breath_symbol_white-home', 'breath_symbol_white');
	} else if (last_part_of_url == 'my-result') {
		myResult();
		$('.lungage-bg').hide();
		$('.lungage-pic .lungage-pic-one').hide();
		$('.lungage-pic .lungage-pic-two').hide();
		$('.bg-img').hide();
		$('.breath_symbol_white').show();
		$('.new-assess-bg').hide();
		$('.login-bg').hide();
		$('.breath_symbol_white').show();
		$('.breath_symbol_white').removeClass('home');
		$('.breath_symbol_white img').css({ 'padding': '0vw', 'max-width': '100vw', 'max-height': '100vh' });
		var srcset = $('.breath_symbol_white').find('source').data('srcset').replace('breath_symbol_white-home', 'breath_symbol_white');
	} else if (last_part_of_url == 'age' || last_part_of_url == 'height' || last_part_of_url == 'cigarettes' || last_part_of_url == 'smoking' || last_part_of_url == 'results') {
		$('.lungage-bg').show();
		$('.lungage-pic .lungage-pic-one').hide();
		$('.lungage-pic .lungage-pic-two').hide();
		$('.login-bg').hide();
		$('.new-assess-bg').hide();
		$('.bg-img').show();
		$('.breath_symbol_white').hide();
		$('.lungage-bg').removeClass('home');
	}
	else {
		/* hide bg image when page is home */
		$('.lungage-bg').hide();
		$('.lungage-pic .lungage-pic-one').hide();
		$('.lungage-pic .lungage-pic-two').hide();
		$('.login-bg').hide();
		$('.new-assess-bg').hide();
		$('.bg-img').show();
		$('.breath_symbol_white').show();
		$('.breath_symbol_white').removeClass('home');
		$('.breath_symbol_white img').css({ 'padding': '0vw', 'max-width': '100vw', 'max-height': '100vh' });
		var srcset = $('.breath_symbol_white').find('source').data('srcset').replace('breath_symbol_white-home', 'breath_symbol_white');
	}
	if (last_part_of_url == 'map-track' || URL.includes('talk-to-me') || URL.includes('guid-me') || URL.includes('environmental') || URL.includes('stop-smoking') || URL.includes('progress-tracker') || URL.includes('appointment-checklist') || URL.includes('understanding-your-progress') || last_part_of_url == 'toolbox' || last_part_of_url == 'guide-me' || URL.includes('toolbox/guide-me/exercise-tips') || URL.includes('toolbox/guide-me/mindfullness') || last_part_of_url == 'talk-to-me' || last_part_of_url == 'better-conversations' || last_part_of_url == 'question-you-could-ask' || last_part_of_url == 'appointment-checklist' || last_part_of_url == 'patients-like-me') {
		$('.breath_symbol_white,.bg-img').hide();
		$('.toolbox-bg-lg').show();
	} else {
		// $('.breath_symbol_white,.bg-img').show();
		$('.toolbox-bg-lg').hide();
	}
	if (last_part_of_url == 'map-track') {
		$('.toolbox-bg-lg').prop('class', 'toolbox-bg-lg map-track-bg-lg');
	} else if (last_part_of_url == 'guide-me') {
		$('.toolbox-bg-lg').prop('class', 'toolbox-bg-lg guid-bg-lg');
	} else if (last_part_of_url == 'talk-to-me') {
		$('.toolbox-bg-lg').prop('class', 'toolbox-bg-lg talk-bg-lg');
	} else if (last_part_of_url == 'better-conversations') {
		$('.toolbox-bg-lg').prop('class', 'toolbox-bg-lg better-bg-lg');
	} else if (last_part_of_url == 'question-you-could-ask') {
		$('.toolbox-bg-lg').prop('class', 'toolbox-bg-lg que-bg-lg');
	} else if (last_part_of_url == 'appointment-checklist') {
		$('.toolbox-bg-lg').prop('class', 'toolbox-bg-lg check-bg-lg');
	} else if (last_part_of_url == 'patients-like-me') {
		$('.toolbox-bg-lg').prop('class', 'toolbox-bg-lg patient-bg-lg');
	} else if (URL.includes('toolbox/guide-me/exercise-tips')) {
		$('.toolbox-bg-lg').prop('class', 'toolbox-bg-lg tips-bg-lg');
	} else if (URL.includes('toolbox/guide-me/mindfullness')) {
		$('.toolbox-bg-lg').prop('class', 'toolbox-bg-lg mindfullness-bg-lg');
	} else if (URL.includes('talk-to-me')) {
		$('.toolbox-bg-lg').prop('class', 'toolbox-bg-lg talk-to-me-bg-lg');
	} else if (URL.includes('guid-me')) {
		$('.toolbox-bg-lg').prop('class', 'toolbox-bg-lg guid-bg-lg');
	} else if (URL.includes('environmental')) {
		$('.toolbox-bg-lg').prop('class', 'toolbox-bg-lg environmental-bg-lg');
	} else if (URL.includes('exercise-tips')) {
		$('.toolbox-bg-lg').prop('class', 'toolbox-bg-lg tips-bg-lg');
	} else if (URL.includes('stop-smoking')) {
		$('.toolbox-bg-lg').prop('class', 'toolbox-bg-lg smoking-bg-lg');
	} else if (URL.includes('understanding-your-progress')) {
		$('.toolbox-bg-lg').prop('class', 'toolbox-bg-lg understand-progress-toolbox-bg-lg');
	} else if (URL.includes('progress-tracker')) {
		$('.toolbox-bg-lg').prop('class', 'toolbox-bg-lg progress-toolbox-bg-lg');
	} else if (last_part_of_url == 'toolbox') {
		$('.toolbox-bg-lg').prop('class', 'toolbox-bg-lg');
	}
	setTimeout(function () {
		if (last_part_of_url == 'breathing') {
			$('.bg-img img').css('left', '-30%');
		} else if (last_part_of_url == 'physical-activities') {
			$('.bg-img img').css('left', '-50%');
		} else if (last_part_of_url == 'concerned') {
			$('.bg-img img').css('left', '-70%');
		} else if (last_part_of_url == 'depressed') {
			$('.bg-img img').css('left', '-90%');
		} else if (last_part_of_url == 'general') {
			$('.bg-img img').css('left', '-110%');
		} else if (last_part_of_url == 'phlegm') {
			$('.bg-img img').css('left', '-130%');
		} else if (last_part_of_url == 'activities') {
			$('.bg-img img').css('left', '-150%');
		} else if (last_part_of_url == 'moderate') {
			$('.bg-img img').css('left', '-170%');
		} else if (last_part_of_url == 'daily') {
			$('.bg-img img').css('left', '-210%');
		} else if (last_part_of_url == 'social') {
			$('.bg-img img').css('left', '-240%');
		} else if (last_part_of_url == 'suffer') {
			$('.bg-img img').css('left', '-275%');
		} else if (last_part_of_url == 'energy') {
			$('.bg-img img').css('left', '-290%');
		} else if (last_part_of_url == 'tense-feeling') {
			$('.bg-img img').css('left', '-320%');
		} else if (last_part_of_url == 'fatigue') {
			$('.bg-img img').css('left', '-340%');
		} else {
			$('.bg-img img').css('left', '-10%');
		}
	}, 500);
	setTimeout(function () {
		if (last_part_of_url == 'age') {
			$('.bg-img img').css('left', '-30%');
		} else if (last_part_of_url == 'height') {
			$('.bg-img img').css('left', '-40%');
		}
		else if (last_part_of_url == 'cigarettes') {
			$('.bg-img img').css('left', '-50%');
		}
		else if (last_part_of_url == 'smoking') {
			$('.bg-img img').css('left', '-60%');
		}
	}, 500);
	$('.breath_symbol_white').find('source').attr('data-srcset', srcset);
	$('.breath_symbol_white').find('source').attr('srcset', srcset);
	$('.breath_symbol_white').find('img').attr('data-src', srcset);
	$('.breath_symbol_white').find('img').attr('data-srcset', srcset);
	$('.breath_symbol_white').find('img').attr('src', srcset);
	if (last_part_of_url == 'select-language') {
		$('header .globe').hide();
	} else {
		$('header .globe').show();
	}
	if ($('.accordion-head').length) {
		var acc = document.getElementsByClassName("accordion-head");
		var i;
		for (i = 0; i < acc.length; i++) {
			acc[i].addEventListener("click", function () {
				this.classList.toggle("active");
				var panel = this.nextElementSibling;
				if (panel.style.maxHeight) {
					panel.style.maxHeight = null;
				} else {
					panel.style.maxHeight = panel.scrollHeight + "px";
				}
			});
		}
	}
	if ($('.swiper-container').length) {
		const swiper = new Swiper('.swiper-container', {
			slidesPerView: 1,
			loop: true,
			updateOnWindowResize: true,
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
			},
			// Navigation arrows
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
			scrollbar: {
				el: '.swiper-scrollbar',
			},
			on: {
				slideChange: function () {
					var currentSlide = this.realIndex + 1;
					document.querySelector('.current-slide').innerHTML = currentSlide;
				},
				paginationRender: function () {
					var totalSlides = document.getElementsByClassName('swiper-pagination-bullet').length;
					document.querySelector('.total-slides').innerHTML = totalSlides;
				}
			},
		});
	}
}
function RESET_LUNGCHECK_SCORE() {
	if (!getLocalStorageItems("LungCheck")) {
		lungCheckScore = {
			p1q1: 4,
			p1q2: 4,
			p1q3: 4,
			p1q4: 4,
			p2q1: 4,
			p2q2: 4,
			p3q1: 4,
			p3q2: 4,
			p3q3: 4,
			p3q4: 4,
			p4q1: 4,
			p4q2: 4,
			p4q3: 4,
			p4q4: 4
		}
	} else {
		lungCheckScore = getLocalStorageItems("LungCheck")['lungCheckScore'];
	}
	$.each(lungCheckScore, function (i, item) {
		if ($('input[type="range"]').data('step') == i) {
			var value = 0;
			if (lungCheckScore[i] == 1) {
				value = 14;
				if (!$('input[data-question]').length) {
					document.getElementById("selected-result").innerHTML = "NEVER";
				} else {
					document.getElementById("selected-result").innerHTML = "NOT LIMITED AT ALL";
				}
			} else if (lungCheckScore[i] == 2) {
				value = 29;
				if (!$('input[data-question]').length) {
					document.getElementById("selected-result").innerHTML = "HARDLY EVER";
				} else {
					document.getElementById("selected-result").innerHTML = "VERY SLIGHTLY LIMITED";
				}
			} else if (lungCheckScore[i] == 3) {
				value = 44;
				if (!$('input[data-question]').length) {
					document.getElementById("selected-result").innerHTML = "A FEW TIMES";
				} else {
					document.getElementById("selected-result").innerHTML = "SLIGHTLY LIMITED";
				}
			} else if (lungCheckScore[i] == 4) {
				value = 50;
				if (!$('input[data-question]').length) {
					document.getElementById("selected-result").innerHTML = "SEVERAL TIMES";
				} else {
					document.getElementById("selected-result").innerHTML = "LIMITED";
				}
			} else if (lungCheckScore[i] == 5) {
				value = 74;
				if (!$('input[data-question]').length) {
					document.getElementById("selected-result").innerHTML = "MANY TIMES";
				} else {
					document.getElementById("selected-result").innerHTML = "MODERATELY LIMITED";
				}
			} else if (lungCheckScore[i] == 6) {
				value = 89;
				if (!$('input[data-question]').length) {
					document.getElementById("selected-result").innerHTML = "A GREAT MANY TIMES";
				} else {
					document.getElementById("selected-result").innerHTML = "EXTREAMLY LIMITED";
				}
			} else {
				value = 100;
				if (!$('input[data-question]').length) {
					document.getElementById("selected-result").innerHTML = "CONSTANTLY";
				} else {
					document.getElementById("selected-result").innerHTML = "TOTALLY LIMITED";
				}
			}
			$('input[type="range"]').val(value);
		}
	});
	setLocalStorageItems("LungCheck", { 'lungCheckScore': lungCheckScore });
}
function CLEAR_SESSION() {
	var session = {
		assessments: {},
		userId: null
	}
	setLocalStorageItems("session", session);
}
function understandingYourProgress() {
	var dynamic_graph = {};
	var total_dynamic_graph = {};
	$.ajax({
		url: APP_URL + '/get-results',
		type: 'GET',
		success: function (response) {
			if (response.results) {
				var total = 0;
				var items = 0;
				var score;
				//console.log(Object.keys(response.results).length+'json length');
				$.each(response.results, function (i, item) {
					items++;
					var dateParts = i.split("/");
					var dateObject = dateParts[1] + '/' + dateParts[0] + '/' + dateParts[2];
					var rdateOBJ = Date.parse(dateObject);
					var pastyearobj = new Date();
					var pastYear = pastyearobj.setFullYear(pastyearobj.getFullYear() - 1);
					//console.log("dateObject::"+dateObject);
					//console.log("rdateOBJ::"+rdateOBJ);
					//console.log(i);
					if (rdateOBJ >= pastYear) {
						console.log("filter::" + i);
						//console.log(parseInt(i.split('/')[1]));
						//console.log(i);
						var date = i.substring(3);
						var r = parseInt(item.symptoms) + parseInt(item.fatigue) + parseInt(item.emotions) + parseInt(item.functional) + parseInt(item.mental);
						score = Math.floor((r - 14) / 84 * 100);
						//console.log("score::"+score)
						total += parseInt(score);
						//console.log("total::"+total);
						dynamic_graph[date] = item;
						total_dynamic_graph[parseInt(i.split('/')[1])] = score;
					}
				});
				$('#average-score-modal #average_score').html(Math.floor(parseInt(total) / parseInt(items)));
				$('#total-score-modal #total_score').html(Math.floor(parseInt(score)));
				// fetchGraphData(dynamic_graph);
			}
			localStorage.setItem('dynamic_graph', JSON.stringify(dynamic_graph));
			localStorage.setItem('total_dynamic_graph', JSON.stringify(total_dynamic_graph));
			console.log(total_dynamic_graph);
			if ($('.tab .tablinks').length) {
				$('.tab .tablinks.active').click();
				exportGraphData(type = 'fatigue', id = "fatigue");
				exportGraphData(type = 'emotions', id = "emotions");
				exportGraphData(type = 'functional', id = "functional");
				exportGraphData(type = 'mental', id = "mental");
				exportGraphData(type = 'symptoms', id = "symptoms");
				exportGraphData(type = 'total score', id = "total");
				//alert();
			}
		},
		error: function (jqXHR, exception) {
			var msg = '';
			if (jqXHR.status === 0) {
				msg = 'Not connect.\n Verify Network.';
			} else if (jqXHR.status == 404) {
				msg = 'Requested page not found. [404]';
			} else if (jqXHR.status == 500) {
				msg = 'Internal Server Error [500].';
			} else if (exception === 'parsererror') {
				msg = 'Requested JSON parse failed.';
			} else if (exception === 'timeout') {
				msg = 'Time out error.';
			} else if (exception === 'abort') {
				msg = 'Ajax request aborted.';
			} else {
				msg = 'Uncaught Error.\n' + jqXHR.responseText;
			}
			$.toast({
				heading: 'Error',
				text: msg,
				icon: 'error',
				loader: true,
			});
		}
	});
}
/* Individual chart */
function chartPdf() {

	var reportPageHeight = 420;
	var reportPageWidth = 600;
	setTimeout(function () {
		$(".canclass").each(function (index) {
			var pdfCanvas = $('<canvas />').attr({
				id: "canvaspdf",
				width: reportPageWidth,
				height: reportPageHeight
			});
			// keep track canvas position
			var pdfctx = $(pdfCanvas)[0].getContext('2d');
			var pdfctxX = 0;
			var pdfctxY = 0;
			var buffer = 100;
			// get the chart height/width
			var canvasHeight = 420;
			var canvasWidth = 600;
			// draw the chart into the new canvas
			pdfctx.drawImage($(this)[0], pdfctxX, pdfctxY, canvasWidth, canvasHeight);
			//pdfctxX += canvasWidth + buffer;
			// our report page is in a grid pattern so replicate that in the new canvas
			// create new pdf and add our new canvas as an image
			var pdf = new jsPDF('l', 'pt', [reportPageWidth, reportPageHeight]);
			pdf.addImage($(pdfCanvas)[0], 'PNG', -25, 10, canvasWidth, canvasHeight - 15);
			// download the pdf
			//pdf.save('filename.pdf');
			//console.log(pdf.output());
			var blob = pdf.output('blob');
			var formData = new FormData();
			formData.append('pdf', blob);
			formData.append('name', $(this).attr('id'));
			//formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
			/*data:{'results':assessment,'_token':$('meta[name="csrf-token"]').attr('content')},
				  type:'POST',*/
			$.ajax(APP_URL + '/lungcheck/export-pdf',
				{
					method: 'POST',
					data: formData,
					processData: false,
					contentType: false,
					success: function (data) { console.log(data) },
					error: function (data) { console.log(data) }
				});
			//alert(index);
			if (index == 4) {
				setTimeout(function () {
					var USER_CODE = sessionStorage.getItem('code');
					var urls = [APP_URL + '/userPDFExport/' + USER_CODE + '.pdf', APP_URL + '/userPDFExport/' + USER_CODE + '-emotions.pdf', APP_URL + '/userPDFExport/' + USER_CODE + '-fatigue.pdf', APP_URL + '/userPDFExport/' + USER_CODE + '-functional.pdf', APP_URL + '/userPDFExport/' + USER_CODE + '-mental.pdf', APP_URL + '/userPDFExport/' + USER_CODE + '-symptoms.pdf'];
					mergeAllPDFs(urls);
				}, 2000);
			}
		});
	}, 600);
}
function exportGraphData(type = 'functional', id = "chartMentes") {
	//understandingYourProgress();
	var dynamic_graph = JSON.parse(localStorage.getItem('dynamic_graph'));
	var total_dynamic_graph = JSON.parse(localStorage.getItem('total_dynamic_graph'));
	var chart_labels = ['August', 'September', 'October', 'November', 'December', 'January', 'February', 'March', 'April', 'May', 'June', 'July'];
	var date = new Date();
	var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
	var monthsShort = ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'];
	var monthNumber = parseInt(date.getMonth()) + 1;
	var l = 0;
	var t = 0;
	var label_chart = [];
	for (var k = 0; k < months.length; k++) {
		if (monthNumber < 12) {
			chart_labels[l] = months[monthNumber];
			label_chart[l] = monthsShort[monthNumber];
			monthNumber = monthNumber + 1;
		} else {
			chart_labels[l] = months[t];
			label_chart[l] = monthsShort[t];
			t = t + 1;
		}
		l++;
	}
	//console.log(chart_labels);
	var chart_data = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
	if (id != 'chartMentes') {
		displayY = true;
		fontColor = "#000";
	} else {
		displayY = false;
		fontColor = "#fff";
	}
	if (type != 'total score') {
		$.each(dynamic_graph, function (i, item) {
			var e = i.split('/');
			var named_date = new Date(e[0] + '/' + '01/' + e[1]);
			var monthname = named_date.getMonthName();
			const key = Object.keys(chart_labels).find(key => chart_labels[key] === monthname);
			//console.log('key::'+key);
			if (type == "fatigue") {
				var valKey = (100 * parseInt(item[type])) / 7;
			} else if (type == 'emotions') {
				var valKey = (100 * parseInt(item[type])) / 21;
			} else if (type == 'functional') {
				var valKey = (100 * parseInt(item[type])) / 28;
			} else if (type == 'mental') {
				var valKey = (100 * parseInt(item[type])) / 14;
			} else if (type == 'symptoms') {
				var valKey = (100 * parseInt(item[type])) / 28;
			}
			if (valKey > 0) {
				chart_data[key] = valKey.toFixed(3);//item[type];
				//console.log('item_type:'+item[type]);
			}
		});
	} else {
		var chart_labels1 = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
		$.each(total_dynamic_graph, function (i, item) {
			monthname = chart_labels1[i - 1];
			const key = Object.keys(chart_labels).find(key => chart_labels[key] === monthname);
			//console.log("key2::"+key);
			chart_data[key] = item;
		});
	}
	//console.log(chart_data + '-:chart_data');
	var ctx = document.getElementById(id).getContext('2d');
	var gradientStroke = ctx.createLinearGradient(500, 0, 100, 0);
	gradientStroke.addColorStop(0, '#80b6f4');
	gradientStroke.addColorStop(1, '#f49080');
	var gradientFill = ctx.createLinearGradient(500, 0, 100, 0);
	gradientFill.addColorStop(0, "rgba(133, 185, 144, 0.6)");
	gradientFill.addColorStop(1, "rgba(133, 185, 144, 0.6)");
	if (id != 'chartMentes') {
		var maintainAspectRatio = false;
		var responsive = false;
	} else {
		var maintainAspectRatio = true;
		var responsive = true;
	}
	window.chartColors = {
		excellent: 'rgb(100, 155, 113)',
		good: 'rgb(202, 225, 187)',
		needs_improvement: 'rgb(255, 161, 125)',
		poor: 'rgb(212, 139, 126)'
	};
	if (id != 'chartMentes') {
		document.getElementById(id).innerHTML = '&nbsp;';
		document.getElementById(id).innerHTML = '<canvas id="' + id + '"></canvas>';
	}
	//$("#reportPage").show();
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: label_chart,
			fillColor: ['rgba(133, 185, 144, 0.6)'],
			fill: false,
			datasets: [{
				data: chart_data,
				fill: true,
				backgroundColor: gradientFill,
				borderColor: gradientStroke,
				pointBorderColor: gradientStroke,
				pointBackgroundColor: gradientStroke,
				pointHoverBackgroundColor: gradientStroke,
				pointHoverBorderColor: gradientStroke,
				borderWidth: 1,
				label: type.toUpperCase()
			}]
		},
		options: {

			showAllTooltips: true,
			tooltips: {
				titleFontSize: 25,
				bodyFontSize: 25,
				backgroundColor: 'rgba(0, 0, 0, 0)',
				displayColors: false,
				custom: function (tooltip) {
					if (!tooltip) return;
					// disable displaying the color box;
					tooltip.displayColors = false;
				},
				callbacks: {
					// use label callback to return the desired label
					label: function (tooltipItem, data) {
						return tooltipItem.yLabel;
					},
					// remove title
					title: function (tooltipItem, data) {
						return;
					}
				},
			},
			responsive: responsive,
			maintainAspectRatio: maintainAspectRatio,
			legend: {
				position: 'bottom',
				labels: {
					fontSize: 20,
				}
			},
			backgroundRules: [{
				backgroundColor: window.chartColors.poor,
				yAxisSegement: 25
			}, {
				backgroundColor: window.chartColors.needs_improvement,
				yAxisSegement: 50
			}, {
				backgroundColor: window.chartColors.good,
				yAxisSegement: 75
			}, {
				backgroundColor: window.chartColors.excellent,
				yAxisSegement: 100
			}],
			hover: {
				mode: 'label'
			},
			scales: {
				xAxes: [{
					display: true,
					scaleLabel: {
						display: true,
					},
					ticks: {
						fontSize: 17,
						fontColor: fontColor
					},
					gridLines: {
						//color: 'rgba(0,0,0,1)',
						lineWidth: 2,
						display: true
					}
				}],
				yAxes: [{
					display: true,
					scaleLabel: {
						display: true,
						labelMaxWidth: 20,
					},
					ticks: {
						min: 0,
						max: 100,
						align: '',
						stepSize: 0.01,
						minRotation: -90,
						padding: 30,
						fontSize: 17,
						fontColor: fontColor,
						suggestedMin: 0.5,
						suggestedMax: 5.5,
						drawTicks: false,
						callback: function (label, index, labels) {
							//if(id !='chartMentes'){
							switch (label) {
								case 0:
									return ['NEEDS A', 'LOT OF', ' IMPROVEMENT'];
								case 26:
									return ['NEEDS SOME ', 'IMPROVEMENT'];
								case 51:
									return ['GOOD'];
								case 76:
									return ['EXCELLENT'];
							}
							//}
						}
					},
					gridLines: {
						//color: 'rgba(0,0,0,1)',
						lineWidth: 2,
						display: false
					}
				}]
			}
		},
		plugins: [{
			beforeDraw: function (chart) {
				var ctx = chart.chart.ctx;
				var ruleIndex = 0;
				var rules = chart.chart.options.backgroundRules;
				var yaxis = chart.chart.scales["y-axis-0"];
				var xaxis = chart.chart.scales["x-axis-0"];
				var partPercentage = 1 / (yaxis.ticksAsNumbers.length - 1);
				for (var i = yaxis.ticksAsNumbers.length - 1; i > 0; i--) {
					if (yaxis.ticksAsNumbers[i] < rules[ruleIndex].yAxisSegement) {
						ctx.fillStyle = rules[ruleIndex].backgroundColor;
						ctx.fillRect(xaxis.left, yaxis.top + ((i - 1) * (yaxis.height * partPercentage)), xaxis.width, yaxis.height * partPercentage);
					} else {
						ruleIndex++;
						i++;
					}
				}
			}
		}]
	});
	if (id != 'chartMentes') {
		Chart.pluginService.register({
			afterDraw: function (chart, easing) {
				if (chart.config.options.showAllTooltips) {
					if (id != 'chartMentes') {
						chart.allTooltipsOnce = true;
					} else {
						chart.allTooltipsOnce = false;
					}

					//chart.options.tooltips.enabled = true;

					Chart.helpers.each(chart.pluginTooltips, function (tooltip) {
						tooltip.initialize();
						tooltip.update();
						// we don't actually need this since we are not animating tooltips
						tooltip.pivot();
						tooltip.transition(easing).draw();
					});
					//chart.options.tooltips.enabled = false;
					chart.pluginTooltips = [];
					chart.config.data.datasets.forEach(function (dataset, i) {
						chart.getDatasetMeta(i).data.forEach(function (sector, j) {
							//console.log(j + "  "+i);
							//console.log(chart.data.datasets[0].data[j]);
							if (chart.data.datasets[0].data[j] > 0 && id != 'chartMentes') {
								chart.pluginTooltips.push(new Chart.Tooltip({
									_chart: chart.chart,
									_chartInstance: chart,
									_data: chart.data,
									_options: chart.options.tooltips,
									_active: [sector]
								}, chart));
							}

						});
					});

				}
			}
		});
	}


	setTimeout(function () {
		var image = myChart.toBase64Image();
		$.ajax(APP_URL + '/lungcheck/export-pdf',
			{
				method: 'POST',
				//dataType:'json',
				data: { 'image': image, name: id },
				/*			processData: true,
							contentType: true,*/

				success: function (data) { console.log(data) },
				//error: function (data) { console.log(data) }
			});
	}, 600);

}
/* End of individual chart*/
function fetchGraphData(type = 'functional', id = "chartMentes") {
	//understandingYourProgress();
	var dynamic_graph = JSON.parse(localStorage.getItem('dynamic_graph'));
	var total_dynamic_graph = JSON.parse(localStorage.getItem('total_dynamic_graph'));
	var chart_labels = ['August', 'September', 'October', 'November', 'December', 'January', 'February', 'March', 'April', 'May', 'June', 'July'];
	var date = new Date();
	var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
	var monthsShort = ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'];
	var monthNumber = parseInt(date.getMonth()) + 1;
	var l = 0;
	var t = 0;
	var label_chart = [];
	for (var k = 0; k < months.length; k++) {
		if (monthNumber < 12) {
			chart_labels[l] = months[monthNumber];
			label_chart[l] = monthsShort[monthNumber];
			monthNumber = monthNumber + 1;
		} else {
			chart_labels[l] = months[t];
			label_chart[l] = monthsShort[t];
			t = t + 1;
		}
		l++;
	}
	//console.log(chart_labels);
	var chart_data = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
	if (id != 'chartMentes') {
		displayY = true;
		fontColor = "#000";
	} else {
		displayY = false;
		fontColor = "#fff";
	}
	if (type != 'total score') {
		$.each(dynamic_graph, function (i, item) {
			var e = i.split('/');
			var named_date = new Date(e[0] + '/' + '01/' + e[1]);
			var monthname = named_date.getMonthName();
			const key = Object.keys(chart_labels).find(key => chart_labels[key] === monthname);
			//console.log('key::'+key);
			if (type == "fatigue") {
				var valKey = (100 * parseInt(item[type])) / 7;
			} else if (type == 'emotions') {
				var valKey = (100 * parseInt(item[type])) / 21;
			} else if (type == 'functional') {
				var valKey = (100 * parseInt(item[type])) / 28;
			} else if (type == 'mental') {
				var valKey = (100 * parseInt(item[type])) / 14;
			} else if (type == 'symptoms') {
				var valKey = (100 * parseInt(item[type])) / 28;
			}
			if (valKey > 0) {
				chart_data[key] = valKey.toFixed(3);//item[type];
				//console.log('item_type:'+item[type]);
			}
		});
	} else {
		var chart_labels1 = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
		$.each(total_dynamic_graph, function (i, item) {
			monthname = chart_labels1[i - 1];
			const key = Object.keys(chart_labels).find(key => chart_labels[key] === monthname);
			//console.log("key2::"+key);
			chart_data[key] = item;
		});
	}
	//console.log(chart_data + '-:chart_data');
	var ctx = document.getElementById(id).getContext('2d');
	var gradientStroke = ctx.createLinearGradient(500, 0, 100, 0);
	gradientStroke.addColorStop(0, '#80b6f4');
	gradientStroke.addColorStop(1, '#f49080');
	var gradientFill = ctx.createLinearGradient(500, 0, 100, 0);
	gradientFill.addColorStop(0, "rgba(133, 185, 144, 0.6)");
	gradientFill.addColorStop(1, "rgba(133, 185, 144, 0.6)");
	if (id != 'chartMentes') {
		var maintainAspectRatio = false;
		var responsive = false;
	} else {
		var maintainAspectRatio = true;
		var responsive = true;
	}
	window.chartColors = {
		excellent: 'rgb(100, 155, 113)',
		good: 'rgb(202, 225, 187)',
		needs_improvement: 'rgb(255, 161, 125)',
		poor: 'rgb(212, 139, 126)'
	};
	if (id != 'chartMentes') {
		document.getElementById(id).innerHTML = '&nbsp;';
		document.getElementById(id).innerHTML = '<canvas id="' + id + '"></canvas>';
	}
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: label_chart,
			fillColor: ['rgba(133, 185, 144, 0.6)'],
			fill: false,
			datasets: [{
				data: chart_data,
				fill: true,
				backgroundColor: gradientFill,
				borderColor: gradientStroke,
				pointBorderColor: gradientStroke,
				pointBackgroundColor: gradientStroke,
				pointHoverBackgroundColor: gradientStroke,
				pointHoverBorderColor: gradientStroke,
				borderWidth: 1,
				label: type.toUpperCase()
			}]
		},
		options: {
			showAllTooltips: true,
			/*tooltips: {
			  titleFontSize: 25,
			  bodyFontSize: 25,
			  backgroundColor: 'rgba(0, 0, 0, 0)',
					  displayColors: false,
			  custom: function(tooltip) {
				if (!tooltip) return;
				// disable displaying the color box;
				tooltip.displayColors = false;
			  },
			  callbacks: {
				// use label callback to return the desired label
				label: function(tooltipItem, data) {
				  return tooltipItem.yLabel;
				},
				// remove title
				title: function(tooltipItem, data) {
				  return;
				}
			  },
				},*/
			responsive: responsive,
			maintainAspectRatio: maintainAspectRatio,
			legend: {
				position: 'bottom',
			},
			/*backgroundRules: [{
				backgroundColor: window.chartColors.poor,
				yAxisSegement: 25
			}, {
				backgroundColor: window.chartColors.needs_improvement,
				yAxisSegement: 50
			}, {
				backgroundColor: window.chartColors.good,
				yAxisSegement: 75
			}, {
				backgroundColor: window.chartColors.excellent,
				yAxisSegement: 100
			}],*/
			hover: {
				mode: 'label'
			},
			scales: {
				xAxes: [{
					display: true,
					scaleLabel: {
						display: true,
					},
					ticks: {
						fontSize: 12,
						fontColor: fontColor
					},
					gridLines: {
						//color: 'rgba(0,0,0,1)',
						lineWidth: 1,
						display: true
					}
				}],
				yAxes: [{
					display: true,
					scaleLabel: {
						display: true,
						labelMaxWidth: 20,
					},
					ticks: {
						min: 0,
						max: 100,
						align: '',
						stepSize: 0.01,
						minRotation: -90,
						padding: 30,
						fontSize: 12,
						fontColor: fontColor,
						suggestedMin: 0.5,
						suggestedMax: 5.5,
						drawTicks: false,
						callback: function (label, index, labels) {
							if (id != 'chartMentes') {
								switch (label) {
									case 0:
										return ['NEEDS A', 'LOT OF', ' IMPROVEMENT'];
									case 26:
										return ['NEEDS SOME ', 'IMPROVEMENT'];
									case 51:
										return ['GOOD'];
									case 76:
										return ['EXCELLENT'];
								}
							}
						}
					},
					gridLines: {
						//color: 'rgba(0,0,0,1)',
						lineWidth: 1,
						display: false
					}
				}]
			}
		},
		/*plugins: [{
			beforeDraw: function (chart) {
				var ctx = chart.chart.ctx;
				var ruleIndex = 0;
				var rules = chart.chart.options.backgroundRules;
				var yaxis = chart.chart.scales["y-axis-0"];
				var xaxis = chart.chart.scales["x-axis-0"];
				var partPercentage = 1 / (yaxis.ticksAsNumbers.length - 1);
				for (var i = yaxis.ticksAsNumbers.length - 1; i > 0; i--) {
					if (yaxis.ticksAsNumbers[i] < rules[ruleIndex].yAxisSegement) {
						ctx.fillStyle = rules[ruleIndex].backgroundColor;
						//ctx.fillRect(xaxis.left, yaxis.top + ((i - 1) * (yaxis.height * partPercentage)), xaxis.width, yaxis.height * partPercentage);
					} else {
						ruleIndex++;
						i++;
					}
				}
			}
		}]*/
	});
	/*if (id != 'chartMentes') {
		Chart.pluginService.register({
		  afterDraw: function(chart, easing) {
			if (chart.config.options.showAllTooltips){
			  if(id != 'chartMentes'){
					chart.allTooltipsOnce = true;	
			  }else{
					chart.allTooltipsOnce = false;
			  }
			  
			  //chart.options.tooltips.enabled = true;
			  
			  Chart.helpers.each(chart.pluginTooltips, function(tooltip) {
				tooltip.initialize();
				tooltip.update();
				// we don't actually need this since we are not animating tooltips
				tooltip.pivot();
				tooltip.transition(easing).draw();
			  });
			  //chart.options.tooltips.enabled = false;
			  chart.pluginTooltips = [];
			  chart.config.data.datasets.forEach(function(dataset, i) {
				chart.getDatasetMeta(i).data.forEach(function(sector, j) {
					//console.log(j + "  "+i);
					//console.log(chart.data.datasets[0].data[j]);
				  if(chart.data.datasets[0].data[j] > 0 && id != 'chartMentes'){
					  chart.pluginTooltips.push(new Chart.Tooltip({
						_chart: chart.chart,
						_chartInstance: chart,
						_data: chart.data,
						_options: chart.options.tooltips,
						_active: [sector]
					  }, chart));
				  }

				});
			  });

			}
		  }
		});
	}*/
}
function myResult() {
	$.ajax({
		url: APP_URL + '/get-results',
		type: 'GET',
		success: function (response) {
			console.log(response.results)
			if (response.results) {
				var e = {};
				$.each(response.results, function (i, item) {
					e = response.results[i];
				});
				var r = parseInt(e.symptoms) + parseInt(e.mental) + parseInt(e.functional) + parseInt(e.emotions) + parseInt(e.fatigue);
				/* previous score calculation is done in controller */
				// var previous_score =  Math.floor((r - 14) / 84 * 100);
				// $('#previous_score').html(previous_score).counterUp();
				if (getLocalStorageItems("assessment")) {
					var e = getLocalStorageItems("assessment");
					var r = parseInt(e.symptoms) + parseInt(e.mental) + parseInt(e.functional) + parseInt(e.emotions) + parseInt(e.fatigue);
					var new_score = Math.floor((r - 14) / 84 * 100);
					/* new score calculation is done in controller */
					//$('#new_score').html(new_score).counterUp();
				}
			}
		},
		error: function (jqXHR, exception) {
			var msg = '';
			if (jqXHR.status === 0) {
				msg = 'Not connect.\n Verify Network.';
			} else if (jqXHR.status == 404) {
				msg = 'Requested page not found. [404]';
			} else if (jqXHR.status == 500) {
				msg = 'Internal Server Error [500].';
			} else if (exception === 'parsererror') {
				msg = 'Requested JSON parse failed.';
			} else if (exception === 'timeout') {
				msg = 'Time out error.';
			} else if (exception === 'abort') {
				msg = 'Ajax request aborted.';
			} else {
				msg = 'Uncaught Error.\n' + jqXHR.responseText;
			}
			$.toast({
				heading: 'Error',
				text: msg,
				icon: 'error',
				loader: true,
			});
		}
	});
}
function checkLocalStorage() {
	//alert('test');
	var application = getLocalStorageItems('application');
	//Gender
	//alert(application);
	if(application == null){
		var application = {
		application: {
			lungage: {
				actualAge: 0,
				lungAge: 0,
				results: {
					gender: 'male',
					age: 16,
					height: 120,
					cigarettes: 0,
					yearsSmoking: 0

				}
			}
		}
		};
		setLocalStorageItems('application', application);
	}
	if(application != null){
		var gender = application.application.lungage.results['gender'];
		if (typeof gender === "undefined") {
		} else {
			jQuery("input[name=gender][value='" + gender + "']").prop("checked", true);

			
		}
		//Age
		var age = application.application.lungage.results['age'];
		//alert(age);
		if (typeof age === "undefined") {
		} else {
			jQuery("input[name='lungageAge']").val(age);
			if(jQuery("input[name=lungageAge]").length){
				sliderColorStyle('age');	
			}
		}
		//Height
		var height = application.application.lungage.results['height'];
		if (typeof height === "undefined") {
		} else {
			jQuery("input[name=lungageHeight]").val(height);
			if(jQuery("input[name=lungageHeight]").length){
				sliderColorStyle('height');	
			}
		}
		//cigarettes
		var cigarettes = application.application.lungage.results['cigarettes'];
		if (typeof cigarettes === "undefined") {
		} else {
			jQuery("input[name=lungageCigarettes]").val(cigarettes);
			if(jQuery("input[name=lungageCigarettes]").length){
				sliderColorStyle('cigarettes');	
			}
		}
		//cigarettes
		var yearsSmoking = application.application.lungage.results['yearsSmoking'];
		//alert(yearsSmoking);
		if (typeof yearsSmoking === "undefined") {
		} else {
			jQuery("input[name=lungageYearsSmoking]").val(yearsSmoking);
			if(jQuery("input[name=lungageYearsSmoking]").length){
				sliderColorStyle('yearsSmoking');	
			}
		}
	}
}
$(document).on('click', "#popup_lungage_report_email", function () {
	$("#lungage-report-modal").show();
});
$(document).on('click', ".lungage-report-close", function () {
	$("#lungage-report-modal").hide();
});
/*$(document).on('click', '#download_lungage_report', function () {
	$('body').removeClass('loaded');
	var application = getLocalStorageItems('application');
	var gender = application.application.lungage.results['gender'];
	var age = application.application.lungage.results['age'];
	var height = application.application.lungage.results['height'];
	var cigarettes = application.application.lungage.results['cigarettes'];
	var yearsSmoking = application.application.lungage.results['yearsSmoking'];
	var lung_age = 30;
	$.ajax({
		url: APP_URL + '/lungage/pdf',
		method: 'POST',
		data: { "gender": gender, 'age': age, 'height': height, 'cigarettes_per_day': cigarettes, 'smoking_years': yearsSmoking, 'lung_age': lung_age, '_token': $('meta[name="csrf-token"]').attr('content') },
		dataType: 'json',
		success: function (response) {
			window.location.href = response.url;
			$.toast({
				heading: 'Success',
				text: 'PDF generated successfully',
				icon: 'success',
				loader: true,
			});
			$('body').addClass('loaded');
		},
		error: function (jqXHR, exception) {
			var msg = '';
			if (jqXHR.status === 0) {
				msg = 'Not connect.\n Verify Network.';
			} else if (jqXHR.status == 404) {
				msg = 'Requested page not found. [404]';
			} else if (jqXHR.status == 500) {
				msg = 'Internal Server Error [500].';
			} else if (exception === 'parsererror') {
				msg = 'Requested JSON parse failed.';
			} else if (exception === 'timeout') {
				msg = 'Time out error.';
			} else if (exception === 'abort') {
				msg = 'Ajax request aborted.';
			} else {
				msg = 'Uncaught Error.\n' + jqXHR.responseText;
			}
			$.toast({
				heading: 'Error',
				text: 'User ID not supported, please check your spelling',
				icon: 'error',
				loader: true,
			});
			$('body').addClass('loaded');
		}
	});
});*/
$(document).ajaxComplete(function (event) {
	//checkLocalStorage();
});
function lungageClick(elem, type) {
	// var elemValue = document.getElementById(elem).value;
	var value = $("input[name='" + elem + "']").val();
	var application = getLocalStorageItems('application');
	application.application.lungage.results[type] = value;
	setLocalStorageItems('application', application);
}
function lungageChange(e, type) {
	sliderColorStyle(type);
	var value = e.value;
	console.log(type);
	var age = getAgeVal(value, type);
	var application = getLocalStorageItems('application');
	application.application.lungage.results[type] = value;
	//console.log(application);
	setLocalStorageItems('application', application);
}
function getLocalStorageItems(name) {
	return JSON.parse(localStorage.getItem(name));
}
function setLocalStorageItems(name, value) {
	localStorage.setItem(name, JSON.stringify(value));
}

$(document).on('click','#form_assessment input[type=checkbox]',function(){
	jQuery("#form_assessment input[type=checkbox]").prop('checked',false);
	jQuery(this).prop('checked',true);

});

function assessChange(e, step) {

	var scoreRange = e.val();
	//alert(scoreRange);
	var score = 1;
	var arrObj = (localStorage.getItem("LungCheck") ? getLocalStorageItems("LungCheck")['lungCheckScore'] : {});
	arrObj[step] = scoreRange;
	setLocalStorageItems("LungCheck", { 'lungCheckScore': arrObj });
}
function getPercentage(e) {
	var r = e.symptoms + e.mental + e.functional + e.emotions + e.fatigue;
	var percentage_result = {
		total: Math.floor((r - 14) / 84 * 100),
		pctSymptoms: 100 - Math.floor((e.symptoms - 4) / 24 * 100),
		pctStatusFunc: 100 - Math.floor((e.functional - 4) / 24 * 100),
		pctStatusMental: 100 - Math.floor((e.mental - 2) / 12 * 100),
		pctFatigue: 100 - Math.floor((e.fatigue - 1) / 6 * 100),
		pctEmotions: 100 - Math.floor((e.emotions - 3) / 18 * 100)
	};
	if ($('#total').length) {
		$('#total').html(percentage_result.total).counterUp();
	}
	if (percentage_result.total < 19) {
		$(".main-result .un-list li:nth-child(1)").addClass("p-child");
	} else if (percentage_result.total > 19 && percentage_result.total < 39) {
		$(".main-result .un-list li:nth-child(2)").addClass("p-child");
	} else if (percentage_result.total > 39 && percentage_result.total < 59) {
		$(".main-result .un-list li:nth-child(3)").addClass("p-child");
	} else if (percentage_result.total > 59 && percentage_result.total < 79) {
		$(".main-result .un-list li:nth-child(4)").addClass("p-child");
	} else {
		$(".main-result .un-list li:nth-child(5)").addClass("p-child");
	}
	return percentage_result;
}
function getResults() {
	if (getLocalStorageItems("LungCheck")) {
		var s = getLocalStorageItems("LungCheck")['lungCheckScore'];
		var U = new Date;
		var date = ('0' + U.getDate()).slice(-2) + '/' + ('0' + (U.getMonth() + 1)).slice(-2) + "/" + U.getFullYear();
		var assessment = {
			date: date,
			symptoms: parseInt(s.p1q1) + parseInt(s.p1q2) + parseInt(s.p2q1) + parseInt(s.p2q2),
			mental: parseInt(s.p1q3) + parseInt(s.p1q4),
			functional: parseInt(s.p3q1) + parseInt(s.p3q2) + parseInt(s.p3q3) + parseInt(s.p3q4),
			emotions: parseInt(s.p4q1) + parseInt(s.p4q2) + parseInt(s.p4q3),
			fatigue: parseInt(s.p4q4)
		};
		setLocalStorageItems("assessment", assessment);
		$.ajax({
			url: APP_URL + '/update-results',
			data: { 'results': assessment, '_token': $('meta[name="csrf-token"]').attr('content') },
			type: 'POST',
			success: function (response) {
				getPercentage(assessment);
			},
			error: function (jqXHR, exception) {
				var msg = '';
				if (jqXHR.status === 0) {
					msg = 'Not connect.\n Verify Network.';
				} else if (jqXHR.status == 404) {
					msg = 'Requested page not found. [404]';
				} else if (jqXHR.status == 500) {
					msg = 'Internal Server Error [500].';
				} else if (exception === 'parsererror') {
					msg = 'Requested JSON parse failed.';
				} else if (exception === 'timeout') {
					msg = 'Time out error.';
				} else if (exception === 'abort') {
					msg = 'Ajax request aborted.';
				} else {
					msg = 'Uncaught Error.\n' + jqXHR.responseText;
				}
				$.toast({
					heading: 'Error',
					text: msg,
					icon: 'error',
					loader: true,
				});
			}
		});
	}
}
/* Lungage age value change according to slider */
function getAgeVal(age, type) {
	var br = '<br/>';
	if (type == 'age') {
		$('#ageValue').text(age);
	} else if (type == 'height') {
		$('#heightValue').empty().append(age + '<br>' + 'cm');
	} else if (type == 'cigarettes') {
		$('#cigarettesValue').text(age);
	} else if (type == 'yearsSmoking') {
		$('#smokingValue').text(age);
	}
	console.log(age);
	return age;
}
// $('.inactive').on('click', function(){
//     $('.inactive').removeClass('gen-active');
//     $(this).addClass('gen-active');
// });
$('.inactive').on('click', function () {
	$(this).parents('.loaded_content').addClass('active');
});
function sliderColorStyle(type) {
	if (type == 'height') {
		const slider_height = document.querySelector('.slider_height');
		const height = document.querySelector('#height');
		const pct_height = document.querySelector('.pct_height')
		height.textContent = `${slider.value}cm`
		// percent for dashoffset
		const p = (1 - slider_height.value / 220) * (3.4 * 3.141 * 52);
		console.log(slider_height.value)
		pct_height.style = `stroke-dashoffset: ${p};`
	} else {
		// if ($('#slider').length) {
		const slider = document.querySelector('#slider');
		const pct = document.querySelector('.age_pect');
		const pctIndicator = document.querySelector('#pct-ind')
		// when slider is drawn for firstime oninput is not working  
		// slider.oninput = () => {
		pct.textContent = `${slider.value}`
		// percent for dashoffset
		if (type == 'age') {
			const p = (1 - slider.value / 120) * (2 * 3.141 * 40);
			pctIndicator.style = `stroke-dashoffset: ${p};`
		} else if (type == 'yearsSmoking') {
			const p = (1 - slider.value / 21) * (2 * 3.141 * 40);
			pctIndicator.style = `stroke-dashoffset: ${p};`
		} else {
			const p = (1 - slider.value / 100) * (2 * 3.141 * 40);
			pctIndicator.style = `stroke-dashoffset: ${p};`
		}

		// }
		// }
	}

}
// if($('.slider_height').length){
// 	const slider_height = document.querySelector('.slider_height');
// 	const height = document.querySelector('#height');
// 	const pct_height = document.querySelector('.pct_height')
// 	slider_height.oninput = () => {
// 		height.textContent = `${slider.value}cm`
// 		// percent for dashoffset
// 		const p = (1 - slider_height.value / 220) * (3.4 * 3.141 * 52);
// 		console.log(slider_height.value)
// 		pct_height.style = `stroke-dashoffset: ${p};`
// 	}
// }

$('#fb-modal').click(function (e) {
	e.preventDefault();
	console.log("open")
	$('#fbmodal').addClass("fb-open");
});

$('#tw-modal').click(function (e) {
	e.preventDefault();
	console.log("open")
	$('#twmodal').addClass("fb-open");
});

$('.close').click(function (e) {
	e.preventDefault();
	$('.fbmodal').removeClass("fb-open");
});

// Calculate lung age
function calculateLungAgeResults() {
	var fev = lossLungCapacity = firstConstant = '';
	var application = getLocalStorageItems('application');
	// e.preventDefault();
	const gen = application.application.lungage.results.gender;
	const height = application.application.lungage.results.height;
	const age = application.application.lungage.results.age;
	const cigarettesNo = application.application.lungage.results.cigarettes;
	const yearsSmoking = application.application.lungage.results.yearsSmoking;
	// console.log(application.application.lungage.results);
	if(cigarettesNo > 0 && yearsSmoking > 0){
		if(gen == 'male'){
			firstConstant = 0.0414 * height;// firstContant variable is a multiply height * 0.0414(male)
			fev = firstConstant - (0.0244 * age) - 3.59;
			var result = maleLungAgeFormula(age, cigarettesNo, yearsSmoking, fev, firstConstant);
		}else{
			firstConstant = 0.0342 * height;// firstContant variable is a multiply height * 0.0342(female)
			fev = firstConstant - (0.0255 * age) - 1.578;
			var result = femaleLungAgeFormula(age, cigarettesNo, yearsSmoking, fev, firstConstant);
		}
	}else{
		var result = age;
	}
	const age_diff = parseInt(result) - age;
		$('#actual-age').empty().append(age);
		$('#calculate-age').empty().append(parseInt(result));
		$('#age_score').empty().append(age_diff);
		var application = getLocalStorageItems('application');
		application.application.lungage.lungAge = parseInt(result);
		setLocalStorageItems('application', application);
}

function maleLungAgeFormula(age, cigarettesNo, yearsSmoking, fev, firstConstant){
	var lossLungCapacity = fevNew = lungage ='';
	if(age < 25){
		return age;
	}else if(age>24 && age < 35){
		if(cigarettesNo < 15 ){
			// lossLungCapacity = 36.5;
			lossLungCapacity = (36.5*yearsSmoking)/1000;
			return maleLungAgeResult(lossLungCapacity, fev, firstConstant);
		}else if(cigarettesNo > 14 && cigarettesNo < 25){
			lossLungCapacity = (20.6*yearsSmoking)/1000;
			return maleLungAgeResult(lossLungCapacity, fev, firstConstant);
		}else{
			lossLungCapacity = (41.9*yearsSmoking)/1000;
			return maleLungAgeResult(lossLungCapacity, fev, firstConstant);
		}
	}else if(age >34 && age < 45){
		if(cigarettesNo < 15 ){
			lossLungCapacity = (30.4*yearsSmoking)/1000;
			return maleLungAgeResult(lossLungCapacity, fev, firstConstant);
		}else if(cigarettesNo > 14 && cigarettesNo < 25){
			lossLungCapacity = (40.3*yearsSmoking)/1000;
			return maleLungAgeResult(lossLungCapacity, fev, firstConstant);
		}else{
			lossLungCapacity = (39*yearsSmoking)/1000;
			return maleLungAgeResult(lossLungCapacity, fev, firstConstant);
		}
	}else if(age > 44 && age < 55){
		if(cigarettesNo < 15 ){
			lossLungCapacity = (55*yearsSmoking)/1000;
			return maleLungAgeResult(lossLungCapacity, fev, firstConstant);
		}else if(cigarettesNo > 14 && cigarettesNo < 25){
			lossLungCapacity = (57.4*yearsSmoking)/1000;
			return maleLungAgeResult(lossLungCapacity, fev, firstConstant);
		}else{
			lossLungCapacity = (68.8*yearsSmoking)/1000;
			return maleLungAgeResult(lossLungCapacity, fev, firstConstant);
		}
	}else if(age > 54 && age < 65){
		if(cigarettesNo < 15 ){
			lossLungCapacity = (49*yearsSmoking)/1000;
			return maleLungAgeResult(lossLungCapacity, fev, firstConstant);
		}else if(cigarettesNo > 14 && cigarettesNo < 25){
			lossLungCapacity = (53.8*yearsSmoking)/1000;
			return maleLungAgeResult(lossLungCapacity, fev, firstConstant);
		}else{
			lossLungCapacity = (68.5*yearsSmoking)/1000;
			return maleLungAgeResult(lossLungCapacity, fev, firstConstant);
		}
	}else if(age > 64){
		if(cigarettesNo < 15 ){
			lossLungCapacity = (66*yearsSmoking)/1000;
			return maleLungAgeResult(lossLungCapacity, fev, firstConstant);
		}else if(cigarettesNo > 14 && cigarettesNo < 25){
			lossLungCapacity = (54.1*yearsSmoking)/1000;
			return maleLungAgeResult(lossLungCapacity, fev, firstConstant);
		}else{
			lossLungCapacity = (73.4*yearsSmoking)/1000;
			return maleLungAgeResult(lossLungCapacity, fev, firstConstant);
		}
	}
}
function femaleLungAgeFormula(age, cigarettesNo, yearsSmoking, fev, firstConstant){
	var lossLungCapacity = fevNew = lungage ='';
	if(age < 25){
		return age;
	}else if(age>24 && age < 35){
		if(cigarettesNo < 15 ){
			lossLungCapacity = (16.5*yearsSmoking)/1000;
			return femaleLungAgeResult(lossLungCapacity, fev, firstConstant);
		}else if(cigarettesNo > 14 && cigarettesNo < 25){
			lossLungCapacity = (21.9*yearsSmoking)/1000;
			return femaleLungAgeResult(lossLungCapacity, fev, firstConstant);
		}else{
			lossLungCapacity = (28*yearsSmoking)/1000;
			return femaleLungAgeResult(lossLungCapacity, fev, firstConstant);
		}
	}else if(age >34 && age < 45){
		if(cigarettesNo < 15 ){
			lossLungCapacity = (28.9*yearsSmoking)/1000;
			return femaleLungAgeResult(lossLungCapacity, fev, firstConstant);
		}else if(cigarettesNo > 14 && cigarettesNo < 25){
			lossLungCapacity = (35.8*yearsSmoking)/1000;
			return femaleLungAgeResult(lossLungCapacity, fev, firstConstant);
		}else{
			lossLungCapacity = (36.9*yearsSmoking)/1000;
			return femaleLungAgeResult(lossLungCapacity, fev, firstConstant);
		}
	}else if(age > 44 && age < 55){
		if(cigarettesNo < 15 ){
			lossLungCapacity = (32.5*yearsSmoking)/1000;
			return femaleLungAgeResult(lossLungCapacity, fev, firstConstant);
		}else if(cigarettesNo > 14 && cigarettesNo < 25){
			lossLungCapacity = (45.7*yearsSmoking)/1000;
			return femaleLungAgeResult(lossLungCapacity, fev, firstConstant);
		}else{
			lossLungCapacity = (37.8*yearsSmoking)/1000;
			return femaleLungAgeResult(lossLungCapacity, fev, firstConstant);
		}
	}else if(age > 54 && age < 65){
		if(cigarettesNo < 15 ){
			lossLungCapacity = (42.7*yearsSmoking)/1000;
			return femaleLungAgeResult(lossLungCapacity, fev, firstConstant);
		}else if(cigarettesNo > 14 && cigarettesNo < 25){
			lossLungCapacity = (52*yearsSmoking)/1000;
			return femaleLungAgeResult(lossLungCapacity, fev, firstConstant);
		}else{
			lossLungCapacity = (50.4*yearsSmoking)/1000;
			return femaleLungAgeResult(lossLungCapacity, fev, firstConstant);
		}
	}else if(age > 64){
		if(cigarettesNo < 15 ){
			lossLungCapacity = (29.4*yearsSmoking)/1000;
			return femaleLungAgeResult(lossLungCapacity, fev, firstConstant);
		}else if(cigarettesNo > 14 && cigarettesNo < 25){
			lossLungCapacity = (47.9*yearsSmoking)/1000;
			return femaleLungAgeResult(lossLungCapacity, fev, firstConstant);
		}else{
			lossLungCapacity = (37.4*yearsSmoking)/1000;
			return femaleLungAgeResult(lossLungCapacity, fev, firstConstant);
		}
	}
}
let maleLungAgeResult = (lossLungCapacity, fev, firstConstant) =>{
	var fevNew = fev - lossLungCapacity;
	var lungage1 =(firstConstant - 3.59 - fevNew);
	var lungage = (lungage1/ 0.0244); 	
	return lungage;
};
let femaleLungAgeResult = (lossLungCapacity, fev, firstConstant) => {
	var fevNew = fev - lossLungCapacity;
	var lungage1 =(firstConstant - 1.578 - fevNew);
	var lungage = (lungage1/ 0.0255);
	return lungage;
};
