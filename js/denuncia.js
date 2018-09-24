
       //var host = 'http://localhost/taqu2.app/web/app_dev.php/api';
       //var host = 'http://10.11.2.6/taqu2.app/web/app_dev.php/api';
       var host = 'http://taquufc.mpfsde.gob.ar/api';

	$(document).ready(function () {

            //slide
              var navListItems = $('div.setup-panel div a'),
                      allWells = $('.setup-content'),
                      allNextBtn = $('.nextBtn');

              allWells.hide();

              navListItems.click(function (e) {
                  e.preventDefault();
                  var $target = $($(this).attr('href')),
                          $item = $(this);

                  if (!$item.hasClass('disabled')) {
                      navListItems.removeClass('btn-selected').addClass('btn-light');
                      $item.addClass('btn-selected');
                      allWells.hide();
                      $target.show();
                      $target.find('input:eq(0)').focus();
                  }
              });

              allNextBtn.click(function(){
                  var curStep = $(this).closest(".setup-content"),
                      curStepBtn = curStep.attr("id"),
                      nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                      curInputs = curStep.find("input[type='text'],input[type='url'],textarea[type='text']"),
                      isValid = true;

                  $(".form-control").removeClass("is-invalid");
                  for(var i=0; i<curInputs.length; i++){
                      if (!curInputs[i].validity.valid){
                          isValid = false;
                          $(curInputs[i]).closest(".form-control").addClass("is-invalid");
                      }
                  }

                  if (isValid)
                      nextStepWizard.removeAttr('disabled').trigger('click');
              });

              $('div.setup-panel div a.btn-selected').trigger('click');
            //end slide


		        $('#comisaria').hide();
		           $("input[name='radio-vendedor']").change(function(){
			            console.log($(this).val() );
			            if($(this).val() == 'si'){
			            	$('#vendedor').show();
			            	$('#nombre').val('');

			            }else{
			            	$('#vendedor').hide();
			            	$('#nombre').val('nn');
			            }
			        });
		           $("input[name='radio-comisaria']").change(function(){
			            console.log($(this).val() );
			            if($(this).val() == 'si'){
			            	$('#comisaria').show();
			            	$('#comisaria').val('');

			            }else{
			            	$('#comisaria').hide();
			            	
			            }
			        });


                   $.ajax({ 
                       type: "GET",
                       dataType: "json",
                       url: host+"/datosform",
                       success: function(response){        
                            
                                //console.log(response.comisarias);
                                var localidades = response.localidades;

                               localidades.forEach(function(data) {
				                    
				                    jQuery("#localidad").append('<option value="'+[data.geo_lat, data.geo_lng,data.id].join('|')+'">'+data.nombre+'</option>');

                                    //$('#localidad').select2('val', '');
			                    });
                                 
                                var comisarias = response.comisarias;

                               comisarias.forEach(function(data) {
				                    
				                    jQuery("#comisaria").append('<option value="'+data.id+'">'+data.nombre+'</option>');
                                    //$('#comisaria').select2('val', '');
			                    });

                        
                       },
                       error: function(){
                        console.log('fuckk');
                       }
                       
                    }); 

});
// MAPAAAAAAAAAAAAAAAAAAAAAAAAAAAA
    // variabel global marker
    var marker;
    var map;

    function taruhMarker(peta, posisiTitik) {

        if (marker) {
            // pindahkan marker
            marker.setPosition(posisiTitik);
        } else {
            // buat marker baru
            marker = new google.maps.Marker({
                position: posisiTitik,
                map: peta,
            });
        }

        // animasi sekali
        marker.setAnimation(google.maps.Animation.BOUNCE);
        setTimeout(function() {
            marker.setAnimation(null);
        }, 750);

        // kirim nilai koordinat ke input
        $("input[name=longitude]").val(posisiTitik.lng);
        $("input[name=latitude]").val(posisiTitik.lat);

        //console.log($("input[name=longitude]").val() + "," + $("input[name=latitude]").val());
    }

    function initialize() {
        var propertiPeta = {
            center: new google.maps.LatLng(-27.7718828,-64.2670035),
            zoom: 14,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        map = new google.maps.Map(document.getElementById("google-maps"), propertiPeta);

        // even listner ketika peta diklik
        google.maps.event.addListener(map, 'click', function(event) {
            console.log(event.latLng);
            taruhMarker(this, event.latLng);
        });

        // marker.setMap(peta);

    }

    jQuery(document).on('change','#localidad',function() {
		    var latlngzoom = jQuery(this).val().split('|');
		    var newzoom = 14; //1*latlngzoom[2],
		    newlat = 1*latlngzoom[0],
		    newlng = 1*latlngzoom[1];
            //console.log(newlat);
           


            if( newlat != '' && newlng != '' ){
		        
		        map.setCenter({lat:newlat, lng:newlng});
                if(newzoom != "" ){
                   map.setZoom(newzoom);
                }
                taruhMarker(map, {lat:newlat, lng:newlng} ); 
            }
	    });
                 // event jendela di-load
    google.maps.event.addDomListener(window, 'load', initialize);

    
   // FORM SUBMIT   
        var submitted = false;
        $( "#form" ).submit(function( event ) {
              if(!submitted) {
                      event.preventDefault();

                      var valoresform = $('#form :input');
                      var values = {};
                        valoresform.each(function() {
                            if( this.type == 'radio' ) values[this.name] = $('input[name='+this.name+']:checked').val();
                            //if( this.type == 'select' ) values[this.name] = $('input[name='+this.name+']:checked').val();
                            else values[this.name] = $(this).val();
                        });

                     
                     console.log(values);
                     $.ajax({
                             type: "POST",
                             url: host+"/denuncia",
                             data: JSON.stringify(values),// now data come in this function
                             contentType: "application/json; charset=utf-8",
                             crossDomain: true,
                             dataType: "json",
                             success: function (data, status, jqXHR) {

                                 //alert("success");// write success in " "
                                    submitted = true;
                                    $( "#form" ).submit();
                             },

                             error: function (jqXHR, status) {
                                 // error handler
                                 console.log(jqXHR+status);
                                 //alert('fail' + status.code);
                                 submitted = false;
                             }
                          });
             }
            });
