/*!
	reflection.js for jQuery v1.1
	(c) 2006-2011 Christophe Beyls <http://www.digitalia.be>
	MIT-style license.
*/

var td_currentReflectedPhoto = 0;

(function($) {

$.fn.extend({
	reflect: function(options) {
		options = $.extend({
			height: 1/3,
			opacity: 0.5
		}, options);

		return this.unreflect().each(function() {
			var img = this;
			if (/^img$/i.test(img.tagName)) {
				function doReflect() {
					var imageWidth = img.width, imageHeight = img.height, reflection, reflectionHeight, wrapper, context, gradient;
					reflectionHeight = Math.floor((options.height > 1) ? Math.min(imageHeight, options.height) : imageHeight * options.height);

					reflection = $("<canvas  />")[0];
                                        
                                        
                                        
					if (reflection.getContext) {
						context = reflection.getContext("2d");
						try {
                                                       
                                                    
                                                        
                                                        //alert(td_floor_color);     
							$(reflection).attr({width: imageWidth, height: reflectionHeight});
                                                        
                                                        if (typeof td_floor_color === 'undefined') {
                                                            context.fillStyle = "#6b442b";
                                                        } else {
                                                            context.fillStyle = td_floor_color;
                                                        }
                                                       
                                                        
                                                        context.fillRect(0, 0, 1000, 256); 
                                                        
							context.save();
							context.translate(0, imageHeight-1);
							context.scale(1, -1);
							context.drawImage(img, 15, -15, imageWidth - 30, imageHeight);
							context.restore();
							context.globalCompositeOperation = "destination-out";

							gradient = context.createLinearGradient(0, 0, 0, reflectionHeight);
                                                        
							gradient.addColorStop(0, "rgba(255, 255, 255, " + (1 - options.opacity) + ")");
							gradient.addColorStop(1, "rgba(255, 255, 255, 1.0)");
                                                        
							context.fillStyle = gradient;
                                                        
                                                 
                                                        
							context.rect(0, 0, imageWidth, reflectionHeight);
							context.fill();
                                                        
                                                        
                                                        
						} catch(e) {
							return;
						}
					} else {
						if (!$.browser.msie) return;
						reflection = $("<img />").attr("src", img.src).css({
							width: imageWidth,
							height: imageHeight,
							marginBottom: reflectionHeight - imageHeight,
							filter: "FlipV progid:DXImageTransform.Microsoft.Alpha(Opacity=" + (options.opacity * 100) + ", FinishOpacity=0, Style=1, StartX=0, StartY=0, FinishX=0, FinishY=" + (reflectionHeight / imageHeight * 100) + ")"
						})[0];
					}
					$(reflection).css({display: "block", border: 0});

                                       

					wrapper = $(/^a$/i.test(img.parentNode.tagName) ? "<span />" : "<div />").insertAfter(img).append([img, reflection])[0];
					wrapper.className = img.className;
					$.data(img, "reflected", wrapper.style.cssText = img.style.cssText);
					$(wrapper).css({width: imageWidth, height: imageHeight + reflectionHeight, overflow: "hidden"});
					img.style.cssText = "display: block; border: 0px";
					img.className = "reflected";
                                        
                                        
                                        
                                        $(reflection).attr('id', 'td_reflect_' + td_currentReflectedPhoto);
                                        boxBlurCanvasRGB('td_reflect_' + td_currentReflectedPhoto,0, 0, imageWidth, reflectionHeight, 4, 2 );
                                        
                                        td_currentReflectedPhoto = td_currentReflectedPhoto + 1;
                                        //console.log(td_currentReflectedPhoto);
				}

				if (img.complete) doReflect();
				else $(img).load(doReflect);
			}
		});
	},

	unreflect: function() {
		return this.unbind("load").each(function() {
			var img = this, reflected = $.data(this, "reflected"), wrapper;

			if (reflected !== undefined) {
				wrapper = img.parentNode;
				img.className = wrapper.className;
				img.style.cssText = reflected;
				$.removeData(img, "reflected");
				wrapper.parentNode.replaceChild(img, wrapper);
			}
		});
	}
});

})(jQuery);