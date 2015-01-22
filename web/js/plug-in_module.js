

// LocationSelect.js
var com = {};
com.elfvision = {};
com.elfvision.kit = {};
com.elfvision.kit.LocationSelect = {};
com.elfvision.ajax = {};
com.elfvision.DEBUG = false;
(function() {
	var e, b, m, p, h, f, a, c, g, r, o, k, l, q, j, i, d, n;
	k = function() {
		if (com.elfvision.DEBUG) {
			var s = new Date().getTime();
			return function() {
				var u = 0,
					v = arguments.length,
					t = ["[DEBUG at ", (new Date().getTime() - s), " ] : "];
				for (; u < v; u++) {
					t.push(arguments[u])
				}
				if (window.console !== undefined && typeof window.console.log == "function") {
					console.log.apply(console, t)
				} else {}
			}
		} else {
			return function() {}
		}
	}();
	q = function(t, s) {
		return function() {
			s.apply(t, arguments)
		}
	};
	l = function(x, v, u, t) {
		k("attaching event", v, "on the object", x);
		var s = function(y) {
				u.apply(t || x, [y])
			},
			w;
		if (window.jQuery !== undefined) {
			jQuery(x).bind(v, s)
		} else {
			if (document.addEventListener) {
				x.addEventListener(v, s, false)
			} else {
				if (document.attachEvent) {
					s = function(z) {
						if (!z) {
							z = window.event
						}
						var y = {
							_event: z,
							type: z.type,
							target: z.srcElement,
							currentTarget: x,
							relatedTarget: z.fromElement ? z.fromElement : z.toElement,
							eventPhase: (z.srcElement == x) ? 2 : 3,
							clientX: z.clientX,
							clientY: z.clientY,
							screenX: z.screenX,
							screenY: z.screenY,
							altKey: z.altKey,
							ctrlKey: z.ctrlKey,
							shiftKey: z.shiftKey,
							charCode: z.keyCode,
							stopPropagation: function() {
								this._event.cancelBubble = true
							},
							preventDefault: function() {
								this._event.returnValue = false
							}
						};
						u.apply(t || x, [y])
					};
					x.attachEvent("on" + v, s)
				}
			}
		}
	};
	c = function() {
		var s, u, t = [
			function() {
				return new XMLHttpRequest()
			},
			function() {
				return new ActiveXObject("Msxml2.XMLHTTP")
			},
			function() {
				return new ActiveXObject("Msxml3.XMLHTTP")
			},
			function() {
				return new ActiveXObject("Microsoft.XMLHTTP")
			}
		];
		return {
			create: function() {
				if (s) {
					return s()
				}
				for (var v = 0; v < t.length; v++) {
					try {
						var y = t[v];
						var w = y();
						if (w) {
							s = y;
							return w
						}
					} catch (x) {
						continue
					}
				}
				s = function() {
					throw new Error("XMLHttpRequest not supported")
				};
				s()
			}
		}
	}();
	g = function(s) {
		if (!s.url) {
			throw new Error("getJson : Must provide url for the request!")
		}
		var t = c.create();
		t.onreadystatechange = function() {
			k("Request Object ", t);
			if (t.readyState == 4) {
				if (t.status == 200 || t.status === 0) {
					k("JSON is successfully retrived according to ", s);
					if (s.callback) {
						k("about to parse json");
						var u = JSON.parse(t.responseText);
						k("parsed ", u);
						s.callback.call(this, u)
					}
				}
			}
		};
		t.open("GET", s.url, true);
		t.setRequestHeader("Cache-Control", "max-age=0,no-cache,no-store,post-check=0,pre-check=0");
		t.setRequestHeader("Expires", "Mon, 26 Jul 1997 05:00:00 GMT");
		t.send(null)
	};
	r = function(u, s) {
		var t = document.createElement("script"),
			v, w;
		if (s) {
			v = /callback=(\w+)&*/;
			w = v.exec(u)[1];
			window[w] = function(x) {
				s(x);
				window[w] = null
			}
		}
		t.src = u;
		document.getElementsByTagName("head")[0].appendChild(t)
	};
	o = function(u, t) {
		var s = document.createElement("script");
		s.src = u;
		k("getting script", u);
		if (t) {
			s.onload = t;
			s.onreadystatechange = function() {
				if (s.readyState == 4 || s.readyState == "loaded" || s.readyState == "complete") {
					t()
				}
			}
		}
		document.getElementsByTagName("head")[0].appendChild(s)
	};
	n = function(w, t) {
		if (!Array.prototype.forEach) {
			var s = w.length >>> 0;
			if (typeof t != "function") {
				throw new TypeError()
			}
			var v = arguments[1];
			for (var u = 0; u < s; u++) {
				if (u in w) {
					t.call(v, w[u], u, this)
				}
			}
		} else {
			return Array.prototype.forEach.call(w, t)
		}
	};
	d = function(u) {
		var v = [],
			t = [];
		for (var s in u) {
			t = [];
			t.push(s);
			t.push("=");
			t.push(u[s]);
			v.push(t.join(""))
		}
		return v.join("&")
	};
	i = function(s) {
		if (s && typeof s === "object" && s.constructor === Array) {
			return true
		}
	};
	j = function() {
		this.observers = [];
		this.guid = 0
	};
	j.prototype.subscribe = function(s) {
		var t = this.guid++;
		this.observers[t] = s;
		return t
	};
	j.prototype.unSubscribe = function(s) {
		delete this.observers[s]
	};
	j.prototype.notify = function(t) {
		for (var u in this.observers) {
			var s = this.observers[u];
			if (s instanceof Function) {
				s.call(this, t)
			} else {
				s.update.call(this, t)
			}
		}
	};
	e = function(s) {
		this.onRowsInserted = new j();
		this.onRowsRemoved = new j();
		this.onRowsUpdated = new j();
		this.onSelectedIndexChanged = new j();
		this.items = [];
		this.selectedIndex = 0;
		this.level = s.level || 0;
		this.label = s.label || "Select..."
	};
	e.prototype.read = function(s) {
		if (s) {
			k("reading items[" + s + "]:", this.items[s]);
			return this.items[s]
		} else {
			return this.items
		}
	};
	e.prototype.insert = function(s) {
		if (i(s)) {
			s = [s];
			this.items = this.items.concat(s)
		} else {
			var t = s;
			this.items.push(t)
		}
		this.onRowsInserted.notify({
			source: this,
			items: s
		})
	};
	e.prototype.remove = function(t) {
		var s;
		if (t) {
			n(this.items, function(v, u) {
				if (v.id === t) {
					s = v;
					this.items.splice(u, 1)
				}
			})
		} else {
			this.items = []
		}
		k("notifying removing");
		this.onRowsRemoved.notify({
			source: this,
			items: [s]
		})
	};
	e.prototype.update = function(s) {
		s = s || [];
		k("updating list model with ", s);
		this.items = [{
			id: 0,
			text: this.label
		}].concat(s);
		k("notifying updating");
		this.onRowsUpdated.notify({
			source: this,
			items: s
		})
	};
	e.prototype.getSelectedIndex = function() {
		return this.selectedIndex
	};
	e.prototype.setSelectedIndex = function(s) {
		var t = this.getSelectedIndex();
		if (t === s) {
			return
		}
		this.selectedIndex = s;
		k("notifying index changed", s);
		this.onSelectedIndexChanged.notify({
			source: this,
			previous: t,
			present: s,
			previousItem: this.read(t),
			presentItem: this.read(s),
			level: this.level
		})
	};
	b = function(u) {
		this.model = u.model;
		this.controller = u.controller;
		this.element = u.element;
		var t = q(this, this.rebuildList),
			s = q(this.controller.parent, this.controller.parent.update);
		this.model.onRowsInserted.subscribe(t);
		this.model.onRowsRemoved.subscribe(t);
		this.model.onRowsUpdated.subscribe(t);
		this.model.onSelectedIndexChanged.subscribe(s);
		k("this list item", this);
		l(this.element, "change", this.controller.updateSelectedIndex, this.controller)
	};
	b.prototype.show = function() {
		this.element.style.display = "inline-block"
	};
	b.prototype.hide = function() {
		this.element.style.display = "none"
	};
	b.prototype.rebuildList = function(w) {
		if (w && w.present && w.present === 0) {
			this.elements.list.selectedIndex = 0;
			return
		}
		k("Rebuilding list ", this);
		var v = this.element,
			s = this.model.read(),
			u = s.length,
			t;
		v.innerHTML = "";
		k(s.length);
		n(s, function(y, x) {
			t = new Option();
			t.setAttribute("value", y.id ? y.text : '');
			t.appendChild(document.createTextNode(y.text));
			v.appendChild(t)
		});
		this.model.setSelectedIndex(0)
	};
	m = function(s) {
		this.parent = s.parent;
		this.model = new e({
			level: s.level,
			label: s.label
		});
		this.view = new b({
			model: this.model,
			controller: this,
			element: s.element
		})
	};
	m.prototype.refresh = function(s) {
		k("refresh data with ", s);
		this.model.update(s)
	};
	m.prototype.updateSelectedIndex = function(s) {
		this.model.setSelectedIndex(s.target.selectedIndex)
	};
	m.prototype.selectByText = function(t) {
		var s = this;
		n(this.model.read(), function(v, u) {
			if (v.text.match("^" + t) == t) {
				k("auto detected ", v, u);
				s.model.setSelectedIndex(u);
				s.view.element.selectedIndex = u
			}
		})
	};
	m.prototype.selectByID = function(s) {
		var t = this;
		n(this.model.read(), function(v, u) {
			if (v.id.toString().match("^" + s) == s) {
				k("auto detected ", v, u);
				t.model.setSelectedIndex(u);
				t.view.element.selectedIndex = u
			}
		})
	};
	m.prototype.getValue = function() {
		return this.model.read(this.model.getSelectedIndex()).text
	};
	p = function(s) {
		this.labels = s.labels;
		this.currentGeo = {};
		this.lists = [];
		this.elements = s.elements;
		this.parent = s.parent
	};
	p.prototype.init = function() {
		k("init select group");
		var s = 0,
			u = this.labels.length,
			t = this;
		for (; s < u; s++) {
			this.lists.push(new m({
				label: this.labels[s],
				element: this.elements[s],
				level: s,
				parent: t
			}))
		}
		k("lists built ", this);
		k(this.parent.listHelper.find(-1));
		this.lists[0].refresh(this.parent.listHelper.find(-1));
		this.lists[0].view.show()
	};
	p.prototype.update = function(u) {
		if (u.level == this.lists.length - 1) {
			return
		}
		k("Updating SelectGroup contents", this);
		if (u.present === 0) {
			var s = u.level + 1,
				t = this.lists.length;
			for (; s < t; s++) {
				this.lists[s].refresh();
				this.lists[s].view.hide()
			}
			return
		}
		switch (u.level) {
			case 0:
				this.currentGeo.province = u.presentItem.text;
				break;
			case 1:
				this.currentGeo.city = u.presentItem.text;
				break;
			case 2:
				this.currentGeo.district = u.presentItem.text;
				break
		}
		this.lists[u.level + 1].refresh(this.parent.listHelper.find(u.level, u.presentItem.id));
		this.lists[u.level + 1].view.show()
	};
	p.prototype.setValues = function(s) {
		k("setting group values", s);
		var t = this;
		n(s, function(v, u) {
			if (v) {
				t.lists[u].selectByText(v)
			}
		})
	};
	p.prototype.setValuesID = function(s) {
		k("setting group values", s);
		var t = this;
		n(s, function(v, u) {
			if (v) {
				t.lists[u].selectByID(v)
			}
		})
	};
	p.prototype.setValuesCode = function(s) {
		k("setting group values", s);
		var t = this;
		n(s, function(v, u) {
			if (v) {
				t.lists[u].selectByText(v)
			}
		})
	};
	p.prototype.getValues = function() {
		var s = [];
		n(this.lists, function(u, t) {
			s.push(u.getValue())
		});
		return s
	};
	h = function(s) {
		this.detectGeoLocation = s.detectGeoLocation === undefined ? true : s.detectGeoLocation;
		this.detector = s.detector || f;
		this.listHelper = s.listHelper || a.getInstance({
			dataUrl: s.dataUrl
		});
		this.selectGroup = new p({
			parent: this,
			labels: s.labels,
			elements: s.elements
		});
		var t = this;
		this.listHelper.fetch(function() {
			k("exec fetech callback");
			t.selectGroup.init();
			if (t.detectGeoLocation) {
				t.detector()
			}
		})
	};
	h.prototype.report = function() {
		return this.selectGroup.getValues()
	};
	h.prototype.select = function(s) {
		this.selectGroup.setValues(s)
	};
	h.prototype.selectID = function(s) {
		this.selectGroup.setValuesID(s)
	};
	f = function() {
		k("Detect!!!!");
		var s = this,
			t;
		o("http://j.maxmind.com/app/geoip.js", function() {
			k("Maxmind API Loaded!");
			t = "http://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20json%20where%0A%20%20url%3D%22http%3A%2F%2Fmaps.google.com%2Fmaps%2Fapi%2Fgeocode%2Fjson%3Flatlng%3D" + geoip_latitude() + "%2C" + geoip_longitude() + "%26sensor%3Dfalse%26language%3Dzh-CN%22&format=json&diagnostics=true&callback=locationselectcb";
			r(t, function(u) {
				k("Geocoder Request Completed through YQL ", u);
				if (u.query.results.json.status === "OK") {
					var w = u.query.results.json.results[0].address_components,
						v = {};
					k("Geocoder statuts ok", w);
					n(w, function(z, x) {
						var y = z.types[0];
						if (y === "locality") {
							v.city = z.long_name
						} else {
							if (y === "administrative_area_level_1") {
								v.province = z.long_name
							}
						}
					});
					s.select([v.province, v.city])
				}
			})
		})
	};
	a = function() {
		var s, t = function(v) {
			var w = v.dataUrl || "js/areas.js",
				u = function() {
					var x = {};
					return {
						get: function(y) {
							return x[y]
						},
						set: function(y, z) {
							x[y] = z
						}
					}
				}();
			return {
				fetch: function(y) {
					k("feteching areas data");
					var x = function(z) {
						k("area data : ", z);
						u.set("province", z.province);
						u.set("city", z.city);
						u.set("district", z.district);
						y()
					};
					g({
						url: w,
						callback: x
					})
				},
				find: function(E, D) {
					var y = [];
					k("querying by record id : ", D, "by list in level : ", E);
					if (u.get(D)) {
						k("lucky! we have it cached");
						y = u.get(D)
					} else {
						k("finding it in areas data");
						if (E === -1) {
							k("this is a query for province data");
							y = u.get("province")
						} else {
							var C = D.toString().substring(0, (E + 1) * 2),
								A = new RegExp("^" + C + "\\d*"),
								z = E === 0 ? u.get("city") : u.get("district"),
								x = 0,
								B = z.length;
							n(z, function(G, F) {
								if (A.test(G.id)) {
									y.push(z[F])
								}
							})
						}
					}
					k("Return results : ", y);
					return y
				}
			}
		};
		return {
			getInstance: function(u) {
				if (!s) {
					s = t(u)
				}
				return s
			}
		}
	}();
	com.elfvision.kit.LocationSelect = h;
	com.elfvision.ajax.XhrFactory = c;
	com.elfvision.ajax.getJson = g;
	com.elfvision.ajax.jsonp = r;
	com.elfvision.ajax.getScript = o
})();
if (window.jQuery !== undefined) {
	$.LocationSelect = {
		build: function(c) {
			var b = c,
				a;
			b.elements = this.get();
			a = new com.elfvision.kit.LocationSelect(c);
			$.LocationSelect.all[b.name] = a;
			return this
		}
	};
	$.LocationSelect.all = {};
	$.fn.LocationSelect = $.LocationSelect.build
};


// AJAX Uploader
var _ajax_uploader = _ajax_uploader || {};

/**
 * Adds all missing properties from second obj to first obj
 */
_ajax_uploader.extend = function(first, second) {

	for (var prop in second) {
		first[prop] = second[prop];
	}
};

/**
 * Searches for a given element in the array, returns -1 if it is not present.
 * @param {Number} [from] The index at which to begin the search
 */
_ajax_uploader.indexOf = function(arr, elt, from) {
	if (arr.indexOf) return arr.indexOf(elt, from);

	from = from || 0;
	var len = arr.length;

	if (from < 0) from += len;

	for (; from < len; from++) {
		if (from in arr && arr[from] === elt) {
			return from;
		}
	}
	return -1;
};

_ajax_uploader.getUniqueId = (function() {
	var id = 0;
	return function() {
		return id++;
	};
})();

//
// Events

_ajax_uploader.attach = function(element, type, fn) {
	if (element.addEventListener) {
		element.addEventListener(type, fn, false);
	} else if (element.attachEvent) {
		element.attachEvent('on' + type, fn);
	}
};
_ajax_uploader.detach = function(element, type, fn) {
	if (element.removeEventListener) {
		element.removeEventListener(type, fn, false);
	} else if (element.attachEvent) {
		element.detachEvent('on' + type, fn);
	}
};

_ajax_uploader.preventDefault = function(e) {
	if (e.preventDefault) {
		e.preventDefault();
	} else {
		e.returnValue = false;
	}
};

//
// Node manipulations

/**
 * Insert node a before node b.
 */
_ajax_uploader.insertBefore = function(a, b) {
	b.parentNode.insertBefore(a, b);
};
_ajax_uploader.remove = function(element) {
	element.parentNode.removeChild(element);
};

_ajax_uploader.contains = function(parent, descendant) {
	// compareposition returns false in this case
	if (parent == descendant) return true;

	if (parent.contains) {
		return parent.contains(descendant);
	} else {
		return !!(descendant.compareDocumentPosition(parent) & 8);
	}
};

/**
 * Creates and returns element from html string
 * Uses innerHTML to create an element
 */
_ajax_uploader.toElement = (function() {
	var div = document.createElement('div');
	return function(html) {
		div.innerHTML = html;
		var element = div.firstChild;
		div.removeChild(element);
		return element;
	};
})();

//
// Node properties and attributes

/**
 * Sets styles for an element.
 * Fixes opacity in IE6-8.
 */
_ajax_uploader.css = function(element, styles) {
	if (styles.opacity != null) {
		if (typeof element.style.opacity != 'string' && typeof(element.filters) != 'undefined') {
			styles.filter = 'alpha(opacity=' + Math.round(100 * styles.opacity) + ')';
		}
	}
	_ajax_uploader.extend(element.style, styles);
};
_ajax_uploader.hasClass = function(element, name) {
	var re = new RegExp('(^| )' + name + '( |$)');
	return re.test(element.className);
};
_ajax_uploader.addClass = function(element, name) {
	if (!_ajax_uploader.hasClass(element, name)) {
		element.className += ' ' + name;
	}
};
_ajax_uploader.removeClass = function(element, name) {
	var re = new RegExp('(^| )' + name + '( |$)');
	element.className = element.className.replace(re, ' ').replace(/^\s+|\s+$/g, "");
};
_ajax_uploader.setText = function(element, text) {
	element.innerText = text;
	element.textContent = text;
};
_ajax_uploader.setHTML = function(element, html) {
	element.innerHTML = html;
};

//
// Selecting elements

_ajax_uploader.children = function(element) {
	var children = [],
		child = element.firstChild;

	while (child) {
		if (child.nodeType == 1) {
			children.push(child);
		}
		child = child.nextSibling;
	}

	return children;
};

_ajax_uploader.getByClass = function(element, className) {
	if (element.querySelectorAll) {
		return element.querySelectorAll('.' + className);
	}

	var result = [];
	var candidates = element.getElementsByTagName("*");
	var len = candidates.length;

	for (var i = 0; i < len; i++) {
		if (_ajax_uploader.hasClass(candidates[i], className)) {
			result.push(candidates[i]);
		}
	}
	return result;
};

/**
 * obj2url() takes a json-object as argument and generates
 * a querystring. pretty much like jQuery.param()
 *
 * how to use:
 *
 *    `_ajax_uploader.obj2url({a:'b',c:'d'},'http://any.url/upload?otherParam=value');`
 *
 * will result in:
 *
 *    `http://any.url/upload?otherParam=value&a=b&c=d`
 *
 * @param  Object JSON-Object
 * @param  String current querystring-part
 * @return String encoded querystring
 */
_ajax_uploader.obj2url = function(obj, temp, prefixDone) {
	var uristrings = [],
		prefix = '&',
		add = function(nextObj, i) {
			var nextTemp = temp ? (/\[\]$/.test(temp)) // prevent double-encoding
				? temp : temp + '[' + i + ']' : i;
			if ((nextTemp != 'undefined') && (i != 'undefined')) {
				uristrings.push(
					(typeof nextObj === 'object') ? _ajax_uploader.obj2url(nextObj, nextTemp, true) : (Object.prototype.toString.call(nextObj) === '[object Function]') ? encodeURIComponent(nextTemp) + '=' + encodeURIComponent(nextObj()) : encodeURIComponent(nextTemp) + '=' + encodeURIComponent(nextObj)
				);
			}
		};

	if (!prefixDone && temp) {
		prefix = (/\?/.test(temp)) ? (/\?$/.test(temp)) ? '' : '&' : '?';
		uristrings.push(temp);
		uristrings.push(_ajax_uploader.obj2url(obj));
	} else if ((Object.prototype.toString.call(obj) === '[object Array]') && (typeof obj != 'undefined')) {
		// we wont use a for-in-loop on an array (performance)
		for (var i = 0, len = obj.length; i < len; ++i) {
			add(obj[i], i);
		}
	} else if ((typeof obj != 'undefined') && (obj !== null) && (typeof obj === "object")) {
		// for anything else but a scalar, we will use for-in-loop
		for (var i in obj) {
			add(obj[i], i);
		}
	} else {
		uristrings.push(encodeURIComponent(temp) + '=' + encodeURIComponent(obj));
	}

	return uristrings.join(prefix)
		.replace(/^&/, '')
		.replace(/%20/g, '+');
};

//
//
// Uploader Classes
//
//

var _ajax_uploader = _ajax_uploader || {};

/**
 * Creates upload button, validates upload, but doesn't create file list or dd.
 */
_ajax_uploader.FileUploaderBasic = function(o) {
	this._options = {
		// set to true to see the server response
		debug: false,
		action: '/server/upload',
		params: {},
		button: null,
		multiple: true,
		maxConnections: 3,
		// validation        
		allowedExtensions: [],
		sizeLimit: 0,
		minSizeLimit: 0,
		// events
		// return false to cancel submit
		onSubmit: function(id, fileName) {},
		onProgress: function(id, fileName, loaded, total) {},
		onComplete: function(id, fileName, responseJSON) {},
		onCancel: function(id, fileName) {},
		// messages                
		messages: {
			typeError: _t('{file} 是个无效文件, 只接受下列文件: {extensions}'),
			sizeError: _t('{file} 文件尺寸太大, 最大文件尺寸为: {sizeLimit}'),
			minSizeError: _t('{file} 文件尺寸太小, 最小文件尺寸为:  {minSizeLimit}'),
			emptyError: _t('{file} 是个空文件, 请重新选择'),
			onLeave: _t('文件正在上传, 是否中断继续')
		},
		showMessage: function(message) {
			$.alert(message);
		}
	};
	_ajax_uploader.extend(this._options, o);

	// number of files being uploaded
	this._filesInProgress = 0;
	this._handler = this._createUploadHandler();

	if (this._options.button) {
		this._button = this._createUploadButton(this._options.button);
	}

	this._preventLeaveInProgress();
};

_ajax_uploader.FileUploaderBasic.prototype = {
	setParams: function(params) {
		this._options.params = params;
	},
	getInProgress: function() {
		return this._filesInProgress;
	},
	_createUploadButton: function(element) {
		var self = this;

		return new _ajax_uploader.UploadButton({
			element: element,
			multiple: this._options.multiple && _ajax_uploader.UploadHandlerXhr.isSupported(),
			onChange: function(input) {
				self._onInputChange(input);
			}
		});
	},
	_createUploadHandler: function() {
		var self = this,
			handlerClass;

		if (_ajax_uploader.UploadHandlerXhr.isSupported()) {
			handlerClass = 'UploadHandlerXhr';
		} else {
			handlerClass = 'UploadHandlerForm';
		}

		var handler = new _ajax_uploader[handlerClass]({
			debug: this._options.debug,
			action: this._options.action,
			maxConnections: this._options.maxConnections,
			onProgress: function(id, fileName, loaded, total) {
				self._onProgress(id, fileName, loaded, total);
				self._options.onProgress(id, fileName, loaded, total);
			},
			onComplete: function(id, fileName, result) {
				self._onComplete(id, fileName, result);
				self._options.onComplete(id, fileName, result);
			},
			onCancel: function(id, fileName) {
				self._onCancel(id, fileName);
				self._options.onCancel(id, fileName);
			}
		});

		return handler;
	},
	_preventLeaveInProgress: function() {
		var self = this;

		_ajax_uploader.attach(window, 'beforeunload', function(e) {
			if (!self._filesInProgress) {
				return;
			}

			var e = e || window.event;
			// for ie, ff
			e.returnValue = self._options.messages.onLeave;
			// for webkit
			return self._options.messages.onLeave;
		});
	},
	_onSubmit: function(id, fileName) {
		this._filesInProgress++;
	},
	_onProgress: function(id, fileName, loaded, total) {},
	_onComplete: function(id, fileName, result) {
		this._filesInProgress--;
		if (result.error) {
			this._options.showMessage(result.error);
		}
	},
	_onCancel: function(id, fileName) {
		this._filesInProgress--;
	},
	_onInputChange: function(input) {
		if (this._handler instanceof _ajax_uploader.UploadHandlerXhr) {
			this._uploadFileList(input.files);
		} else {
			if (this._validateFile(input)) {
				this._uploadFile(input);
			}
		}
		this._button.reset();
	},
	_uploadFileList: function(files) {
		for (var i = 0; i < files.length; i++) {
			if (!this._validateFile(files[i])) {
				return;
			}
		}

		for (var i = 0; i < files.length; i++) {
			this._uploadFile(files[i]);
		}
	},
	_uploadFile: function(fileContainer) {
		var id = this._handler.add(fileContainer);
		var fileName = this._handler.getName(id);

		if (this._options.onSubmit(id, fileName) !== false) {
			this._onSubmit(id, fileName);
			this._handler.upload(id, this._options.params);
		}
	},
	_validateFile: function(file) {
		var name, size;

		if (file.value) {
			// it is a file input            
			// get input value and remove path to normalize
			name = file.value.replace(/.*(\/|\\)/, "");
		} else {
			// fix missing properties in Safari
			name = file.fileName != null ? file.fileName : file.name;
			size = file.fileSize != null ? file.fileSize : file.size;
		}

		if (!this._isAllowedExtension(name)) {
			this._error('typeError', name);
			return false;

		} else if (size === 0) {
			this._error('emptyError', name);
			return false;

		} else if (size && this._options.sizeLimit && size > this._options.sizeLimit) {
			this._error('sizeError', name);
			return false;

		} else if (size && size < this._options.minSizeLimit) {
			this._error('minSizeError', name);
			return false;
		}

		return true;
	},
	_error: function(code, fileName) {
		var message = this._options.messages[code];

		function r(name, replacement) {
			message = message.replace(name, replacement);
		}

		r('{file}', this._formatFileName(fileName));
		r('{extensions}', this._options.allowedExtensions.join(', '));
		r('{sizeLimit}', this._formatSize(this._options.sizeLimit));
		r('{minSizeLimit}', this._formatSize(this._options.minSizeLimit));

		this._options.showMessage(message);
	},
	_formatFileName: function(name) {
		if (name.length > 33) {
			name = name.slice(0, 19) + '...' + name.slice(-13);
		}
		return name;
	},
	_isAllowedExtension: function(fileName) {
		var ext = (-1 !== fileName.indexOf('.')) ? fileName.replace(/.*[.]/, '').toLowerCase() : '';
		var allowed = this._options.allowedExtensions;

		if (!allowed.length) {
			return true;
		}

		for (var i = 0; i < allowed.length; i++) {
			if (allowed[i].toLowerCase() == ext) {
				return true;
			}
		}

		return false;
	},
	_formatSize: function(bytes) {
		var i = -1;
		do {
			bytes = bytes / 1024;
			i++;
		} while (bytes > 99);

		return Math.max(bytes, 0.1).toFixed(1) + ['kB', 'MB', 'GB', 'TB', 'PB', 'EB'][i];
	}
};


/**
 * Class that creates upload widget with drag-and-drop and file list
 * @inherits _ajax_uploader.FileUploaderBasic
 */
_ajax_uploader.FileUploader = function(o) {

	// call parent constructor
	_ajax_uploader.FileUploaderBasic.apply(this, arguments);

	// additional options    
	_ajax_uploader.extend(this._options, {
		element: null,
		// if set, will be used instead of _ajax_upload-list in template
		listElement: null,

		template: //'<div class="_ajax_upload-drop-area"><span>拖拽文件到这里上传</span></div>' +
		'<a href="javascript:;" class="_ajax_upload-button btn btn-green btn-sm"><i class="icon-upload-alt"></i>上传附件</a>' +
			'<div class="nb-upload-box"><input type="text" name="attachs_sort" class="hide attachs_sort" /><ul class="nb-upload-list _ajax_upload-list clearfix" id="upload-ul"></ul></div>',

		// template for one item in file list
		fileTemplate: '<li>' +
			'<div class="mod-head upload-loading aw-icon"></div>' +
			'<div class="mod-body">' +
			'<p class="_ajax_upload-file hide"></p>' +
			'<p class="_ajax_upload-size hide"></p>' +
			'</div>' +
			'<div class="mod-footer _ajax_upload-inset">' +
			'<a class="prev"><i class="icon icon-triangle-left-mini"></i></a>' +
			'<a href="javascript:;" class="_ajax_upload_delete_file" onclick="if (confirm(\'' + _t('确认删除?') + '\')) { _ajax_uploader_delete_attach(this.href, $(this).parents(\'li\')) } return false;">' + _t('删除') + '</a>' +
			'<a class="next"><i class="icon icon-triangle-right-mini"></i></a>' +
			'</div>' +
			'</li>',

		classes: {
			// used to get elements from templates
			button: '_ajax_upload-button',
			drop: '_ajax_upload-drop-area',
			dropActive: '_ajax_upload-drop-area-active',
			list: '_ajax_upload-list',

			file: '_ajax_upload-file',
			spinner: 'upload-loading',
			size: '_ajax_upload-size',
			//cancel: '_ajax_upload-cancel',

			// added to list item when upload completes
			// used in css to hide progress spinner
			success: '_ajax_upload-success',
			fail: 'error',
			inset: '_ajax_upload-inset'
		}
	});
	// overwrite options with user supplied    
	_ajax_uploader.extend(this._options, o);

	this._element = this._options.element;

	$(this._element).html(this._options.template);

	this._listElement = this._options.listElement || this._find(this._element, 'list');

	this._classes = this._options.classes;

	this._button = this._createUploadButton(this._find(this._element, 'button'));


	//this._element.getAttribute('id') == 
	//this._bindCancelEvent();
	//this._setupDragDrop();
};

function insetImages(obj) {
	var iframeId = document.getElementById('answer_content_ifr') ? document.getElementById('answer_content_ifr') : document.getElementById('question_detail_ifr');
	var objElements = iframeId.contentWindow.document.getElementById('tinymce');
	var rel = obj.parentNode.parentNode.getElementsByTagName('span')[0].getAttribute('rel');
	var html = '<img src="' + rel + '"/>';
	objElements.designMode = "On";
	if (getBrowser() == 'ie') {
		objElements.focus();
		o = iframeId.document.selection.createRange();
		o.pasteHTML(html);
	} else {
		objElements.focus();
		var rng = iframeId.contentWindow.getSelection().getRangeAt(0);
		var frg = rng.createContextualFragment(html);
		rng.insertNode(frg);
	}
};

//获取浏览器版本  
function getBrowser() {
	var agentValue = window.navigator.userAgent.toLowerCase();
	if (agentValue.indexOf('msie') > 0) {
		return "ie";
	} else if (agentValue.indexOf('firefox') > 0) {
		return "ff";
	} else if (agentValue.indexOf('chrome') > 0) {
		return "chrome";
	}
}

// inherit from Basic Uploader
_ajax_uploader.extend(_ajax_uploader.FileUploader.prototype, _ajax_uploader.FileUploaderBasic.prototype);

_ajax_uploader.extend(_ajax_uploader.FileUploader.prototype, {
	/**
	 * Gets one of the elements listed in this._options.classes
	 **/
	_find: function(parent, type) {
		var element = _ajax_uploader.getByClass(parent, this._options.classes[type])[0];
		if (!element) {
			throw new Error('element not found ' + type);
		}

		return element;
	},

	_setupDragDrop: function() {
		var self = this,
			dropArea = this._find(this._element, 'drop');

		var dz = new _ajax_uploader.UploadDropZone({
			element: dropArea,
			onEnter: function(e) {
				_ajax_uploader.addClass(dropArea, self._classes.dropActive);
				e.stopPropagation();
			},
			onLeave: function(e) {
				e.stopPropagation();
			},
			onLeaveNotDescendants: function(e) {
				_ajax_uploader.removeClass(dropArea, self._classes.dropActive);
			},
			onDrop: function(e) {
				dropArea.style.display = 'none';
				_ajax_uploader.removeClass(dropArea, self._classes.dropActive);
				self._uploadFileList(e.dataTransfer.files);
			}
		});

		dropArea.style.display = 'none';

		_ajax_uploader.attach(document, 'dragenter', function(e) {
			if (!dz._isValidFileDrag(e)) return;

			dropArea.style.display = 'block';
		});
		_ajax_uploader.attach(document, 'dragleave', function(e) {
			if (!dz._isValidFileDrag(e)) return;

			var relatedTarget = document.elementFromPoint(e.clientX, e.clientY);
			// only fire when leaving document out
			if (!relatedTarget || relatedTarget.nodeName == "HTML") {
				dropArea.style.display = 'none';
			}
		});
	},

	_onSubmit: function(id, fileName) {
		_ajax_uploader.FileUploaderBasic.prototype._onSubmit.apply(this, arguments);
		this._addToList(id, fileName);
		// Modify by kk
		$('.btn-publish-submit').addClass('disabled');
	},

	_onProgress: function(id, fileName, loaded, total) {
		_ajax_uploader.FileUploaderBasic.prototype._onProgress.apply(this, arguments);

		var item = this._getItemByFileId(id);
		var size = this._find(item, 'size');
		size.style.display = '';

		var text;

		if (loaded != total) {
			//text = Math.round(loaded / total * 100) + '% from ' + this._formatSize(total);
			text = Math.round(loaded / total * 100) + '%';
		} else {
			//text = this._formatSize(total);
			text = this._formatSize(total);
		}

		_ajax_uploader.setHTML(size, text);
	},

	_onComplete: function(id, fileName, result) {

		_ajax_uploader.FileUploaderBasic.prototype._onComplete.apply(this, arguments);

		// mark completed
		var item = this._getItemByFileId(id);

		if (result.success) {
			if (typeof(result.delete_url) != 'undefined') {
				_ajax_uploader.getByClass(item, '_ajax_upload_delete_file')[0].href = result.delete_url.replace(/&amp;/g, '&');
			}

			if (typeof(result.thumb) != 'undefined') {
				var sort = $(item).parents('.nb-upload-box').find('.attachs_sort');
				if (sort.val() == '') {
					sort.val(result.attach_id);
				} else {
					sort.val(sort.val() + ',' + result.attach_id);
				}
				$(item).attr('data-id', result.attach_id);
				$(this._find(item, 'spinner')).css('background-image', 'url(' + result.thumb + ')').attr('rel', result.thumb);
				if (typeof(result.attach_id) != 'undefined') {
					if ($('#advanced_editor').attr('data-insert') == 'true') {
						$('<a/>').attr('href', 'javascript:;').addClass('nb-comment').attr('onclick', 'insert_attach(this,' + result.attach_id + ',\'' + result.attach_tag + '\')').html(' 插入').appendTo($(this._find(item, 'inset')));
					} else {
						$('<a/>').attr('href', 'javascript:;').addClass('hide').attr('onclick', 'insert_attach(this,' + result.attach_id + ',\'' + result.attach_tag + '\')').html('插入').appendTo($(this._find(item, 'inset')));
					}
				}
			} else if (typeof(result.class_name) != 'undefined') {
				_ajax_uploader.addClass(this._find(item, 'spinner'), 'upload-' + result.class_name);
			} else {
				_ajax_uploader.addClass(item, this._classes.success);
			}
		} else {
			if (!/MSIE/.test(navigator.userAgent)) {
				_ajax_uploader.getByClass(item, '_ajax_upload_delete_file')[0].style.display = 'none';
			}

			_ajax_uploader.addClass(this._find(item, 'spinner'), 'upload-error');

			_ajax_uploader.addClass(item, this._classes.fail);
			_ajax_uploader.getByClass(item, '_ajax_upload_delete_file')[0].style.display = 'none';
		}

		_ajax_uploader.removeClass(this._find(item, 'spinner'), this._classes.spinner);

		// Modify by kk
		$('.btn-publish-submit').removeClass('disabled');
	},

	_addToList: function(id, fileName) {
		var item = _ajax_uploader.toElement(this._options.fileTemplate);

		item.qqFileId = id;

		var fileElement = this._find(item, 'file');
		_ajax_uploader.setText(fileElement, this._formatFileName(fileName));
		this._find(item, 'size').style.display = 'none';

		this._listElement.appendChild(item);
	},

	_getItemByFileId: function(id) {
		var item = this._listElement.firstChild;

		// there can't be txt nodes in dynamically created list
		// and we can  use nextSibling
		while (item) {
			if (item.qqFileId == id) return item;
			item = item.nextSibling;
		}
	},

	/**
	 * delegate click event for cancel link
	 **/
	_bindCancelEvent: function() {
		var self = this,
			list = this._listElement;

		_ajax_uploader.attach(list, 'click', function(e) {
			e = e || window.event;
			var target = e.target || e.srcElement;

			if (_ajax_uploader.hasClass(target, self._classes.cancel)) {
				_ajax_uploader.preventDefault(e);

				var item = target.parentNode;
				self._handler.cancel(item.qqFileId);
				_ajax_uploader.remove(item);
			}
		});
	}
});

_ajax_uploader.UploadDropZone = function(o) {
	this._options = {
		element: null,
		onEnter: function(e) {},
		onLeave: function(e) {},
		// is not fired when leaving element by hovering descendants   
		onLeaveNotDescendants: function(e) {},
		onDrop: function(e) {}
	};
	_ajax_uploader.extend(this._options, o);

	this._element = this._options.element;

	this._disableDropOutside();
	this._attachEvents();
};

_ajax_uploader.UploadDropZone.prototype = {
	_disableDropOutside: function(e) {
		// run only once for all instances
		if (!_ajax_uploader.UploadDropZone.dropOutsideDisabled) {

			_ajax_uploader.attach(document, 'dragover', function(e) {
				if (e.dataTransfer) {
					e.dataTransfer.dropEffect = 'none';
					e.preventDefault();
				}
			});

			_ajax_uploader.UploadDropZone.dropOutsideDisabled = true;
		}
	},

	_attachEvents: function() {
		var self = this;

		_ajax_uploader.attach(self._element, 'dragover', function(e) {
			if (!self._isValidFileDrag(e)) return;

			var effect = e.dataTransfer.effectAllowed;
			if (effect == 'move' || effect == 'linkMove') {
				e.dataTransfer.dropEffect = 'move'; // for FF (only move allowed)    
			} else {
				e.dataTransfer.dropEffect = 'copy'; // for Chrome
			}

			e.stopPropagation();
			e.preventDefault();
		});

		_ajax_uploader.attach(self._element, 'dragenter', function(e) {
			if (!self._isValidFileDrag(e)) return;

			self._options.onEnter(e);
		});

		_ajax_uploader.attach(self._element, 'dragleave', function(e) {
			if (!self._isValidFileDrag(e)) return;

			self._options.onLeave(e);

			var relatedTarget = document.elementFromPoint(e.clientX, e.clientY);
			// do not fire when moving a mouse over a descendant
			if (_ajax_uploader.contains(this, relatedTarget)) return;

			self._options.onLeaveNotDescendants(e);
		});

		_ajax_uploader.attach(self._element, 'drop', function(e) {
			if (!self._isValidFileDrag(e)) return;

			e.preventDefault();
			self._options.onDrop(e);
		});
	},

	_isValidFileDrag: function(e) {
		var dt = e.dataTransfer,
			// do not check dt.types.contains in webkit, because it crashes safari 4            
			isWebkit = navigator.userAgent.indexOf("AppleWebKit") > -1;

		// dt.effectAllowed is none in Safari 5
		// dt.types.contains check is for firefox            
		return dt && dt.effectAllowed != 'none' &&
			(dt.files || (!isWebkit && dt.types.contains && dt.types.contains('Files')));

	}
};

_ajax_uploader.UploadButton = function(o) {
	this._options = {
		element: null,
		// if set to true adds multiple attribute to file input      
		multiple: false,
		// name attribute of file input
		name: 'file',
		onChange: function(input) {},
		hoverClass: '_ajax_upload-button-hover',
		focusClass: '_ajax_upload-button-focus'
	};

	_ajax_uploader.extend(this._options, o);

	this._element = this._options.element;

	// make button suitable container for input
	_ajax_uploader.css(this._element, {
		position: 'relative',
		overflow: 'hidden',
		// Make sure browse button is in the right side
		// in Internet Explorer
		direction: 'ltr'
	});

	this._input = this._createInput();
};

_ajax_uploader.UploadButton.prototype = {
	/* returns file input element */
	getInput: function() {
		return this._input;
	},
	/* cleans/recreates the file input */
	reset: function() {
		if (this._input.parentNode) {
			_ajax_uploader.remove(this._input);
		}

		_ajax_uploader.removeClass(this._element, this._options.focusClass);
		this._input = this._createInput();
	},
	_createInput: function() {
		var input = document.createElement("input");

		if (this._options.multiple) {
			input.setAttribute("multiple", "multiple");
		}

		input.setAttribute("type", "file");
		input.setAttribute("name", this._options.name);

		_ajax_uploader.css(input, {
			position: 'absolute',
			// in Opera only 'browse' button
			// is clickable and it is located at
			// the right side of the input
			right: 0,
			top: 0,
			fontFamily: 'Arial',
			// 4 persons reported this, the max values that worked for them were 243, 236, 236, 118
			fontSize: '118px',
			margin: 0,
			padding: 0,
			cursor: 'pointer',
			opacity: 0
		});

		this._element.appendChild(input);

		var self = this;
		_ajax_uploader.attach(input, 'change', function() {
			self._options.onChange(input);
		});

		_ajax_uploader.attach(input, 'mouseover', function() {
			_ajax_uploader.addClass(self._element, self._options.hoverClass);
		});
		_ajax_uploader.attach(input, 'mouseout', function() {
			_ajax_uploader.removeClass(self._element, self._options.hoverClass);
		});
		_ajax_uploader.attach(input, 'focus', function() {
			_ajax_uploader.addClass(self._element, self._options.focusClass);
		});
		_ajax_uploader.attach(input, 'blur', function() {
			_ajax_uploader.removeClass(self._element, self._options.focusClass);
		});

		// IE and Opera, unfortunately have 2 tab stops on file input
		// which is unacceptable in our case, disable keyboard access
		if (window.attachEvent) {
			// it is IE or Opera
			input.setAttribute('tabIndex', "-1");
		}

		return input;
	}
};

/**
 * Class for uploading files, uploading itself is handled by child classes
 */
_ajax_uploader.UploadHandlerAbstract = function(o) {
	this._options = {
		debug: false,
		action: G_BASE_URL + '/upload.php',
		// maximum number of concurrent uploads        
		maxConnections: 999,
		onProgress: function(id, fileName, loaded, total) {},
		onComplete: function(id, fileName, response) {},
		onCancel: function(id, fileName) {}
	};
	_ajax_uploader.extend(this._options, o);

	this._queue = [];
	// params for files in queue
	this._params = [];
};

_ajax_uploader.UploadHandlerAbstract.prototype = {
	log: function(str) {
		if (this._options.debug && window.console) console.log('[uploader] ' + str);
	},
	/**
	 * Adds file or file input to the queue
	 * @returns id
	 **/
	add: function(file) {},
	/**
	 * Sends the file identified by id and additional query params to the server
	 */
	upload: function(id, params) {
		var len = this._queue.push(id);

		var copy = {};
		_ajax_uploader.extend(copy, params);
		this._params[id] = copy;

		// if too many active uploads, wait...
		if (len <= this._options.maxConnections) {
			this._upload(id, this._params[id]);
		}
	},
	/**
	 * Cancels file upload by id
	 */
	cancel: function(id) {
		this._cancel(id);
		this._dequeue(id);
	},
	/**
	 * Cancells all uploads
	 */
	cancelAll: function() {
		for (var i = 0; i < this._queue.length; i++) {
			this._cancel(this._queue[i]);
		}
		this._queue = [];
	},
	/**
	 * Returns name of the file identified by id
	 */
	getName: function(id) {},
	/**
	 * Returns size of the file identified by id
	 */
	getSize: function(id) {},
	/**
	 * Returns id of files being uploaded or
	 * waiting for their turn
	 */
	getQueue: function() {
		return this._queue;
	},
	/**
	 * Actual upload method
	 */
	_upload: function(id) {},
	/**
	 * Actual cancel method
	 */
	_cancel: function(id) {},
	/**
	 * Removes element from queue, starts upload of next
	 */
	_dequeue: function(id) {
		var i = _ajax_uploader.indexOf(this._queue, id);
		this._queue.splice(i, 1);

		var max = this._options.maxConnections;

		if (this._queue.length >= max && i < max) {
			var nextId = this._queue[max - 1];
			this._upload(nextId, this._params[nextId]);
		}
	}
};

/**
 * Class for uploading files using form and iframe
 * @inherits _ajax_uploader.UploadHandlerAbstract
 */
_ajax_uploader.UploadHandlerForm = function(o) {
	_ajax_uploader.UploadHandlerAbstract.apply(this, arguments);

	this._inputs = {};
};
// @inherits _ajax_uploader.UploadHandlerAbstract
_ajax_uploader.extend(_ajax_uploader.UploadHandlerForm.prototype, _ajax_uploader.UploadHandlerAbstract.prototype);

_ajax_uploader.extend(_ajax_uploader.UploadHandlerForm.prototype, {
	add: function(fileInput) {
		fileInput.setAttribute('name', 'qqfile');
		var id = '_ajax_upload-handler-iframe' + _ajax_uploader.getUniqueId();

		this._inputs[id] = fileInput;

		// remove file input from DOM
		if (fileInput.parentNode) {
			_ajax_uploader.remove(fileInput);
		}

		return id;
	},
	getName: function(id) {
		// get input value and remove path to normalize
		return this._inputs[id].value.replace(/.*(\/|\\)/, "");
	},
	_cancel: function(id) {
		this._options.onCancel(id, this.getName(id));

		delete this._inputs[id];

		var iframe = document.getElementById(id);
		if (iframe) {
			// to cancel request set src to something else
			// we use src="javascript:false;" because it doesn't
			// trigger ie6 prompt on https
			iframe.setAttribute('src', 'javascript:false;');

			_ajax_uploader.remove(iframe);
		}
	},
	_upload: function(id, params) {
		var input = this._inputs[id];

		if (!input) {
			throw new Error('file with passed id was not added, or already uploaded or cancelled');
		}

		var fileName = this.getName(id);

		var iframe = this._createIframe(id);
		var form = this._createForm(iframe, params);
		form.appendChild(input);

		var self = this;
		this._attachLoadEvent(iframe, function() {
			self.log('iframe loaded');

			var response = self._getIframeContentJSON(iframe);

			self._options.onComplete(id, fileName, response);
			self._dequeue(id);

			delete self._inputs[id];
			// timeout added to fix busy state in FF3.6
			setTimeout(function() {
				_ajax_uploader.remove(iframe);
			}, 1);
		});

		form.submit();
		_ajax_uploader.remove(form);

		return id;
	},
	_attachLoadEvent: function(iframe, callback) {
		_ajax_uploader.attach(iframe, 'load', function() {
			// when we remove iframe from dom
			// the request stops, but in IE load
			// event fires
			if (!iframe.parentNode) {
				return;
			}

			// fixing Opera 10.53
			if (iframe.contentDocument &&
				iframe.contentDocument.body &&
				iframe.contentDocument.body.innerHTML == "false") {
				// In Opera event is fired second time
				// when body.innerHTML changed from false
				// to server response approx. after 1 sec
				// when we upload file with iframe
				return;
			}

			callback();
		});
	},
	/**
	 * Returns json object received by iframe from server.
	 */
	_getIframeContentJSON: function(iframe) {
		// iframe.contentWindow.document - for IE<7
		var doc = iframe.contentDocument ? iframe.contentDocument : iframe.contentWindow.document,
			response;

		this.log("converting iframe's innerHTML to JSON");
		this.log("innerHTML = " + doc.body.innerHTML);

		try {
			response = eval("(" + doc.body.innerHTML + ")");
		} catch (err) {
			response = {};
		}

		return response;
	},
	/**
	 * Creates iframe with unique name
	 */
	_createIframe: function(id) {
		// We can't use following code as the name attribute
		// won't be properly registered in IE6, and new window
		// on form submit will open
		// var iframe = document.createElement('iframe');
		// iframe.setAttribute('name', id);

		var iframe = _ajax_uploader.toElement('<iframe src="javascript:false;" name="' + id + '" />');
		// src="javascript:false;" removes ie6 prompt on https

		iframe.setAttribute('id', id);

		iframe.style.display = 'none';
		document.body.appendChild(iframe);

		return iframe;
	},
	/**
	 * Creates form, that will be submitted to iframe
	 */
	_createForm: function(iframe, params) {
		// We can't use the following code in IE6
		// var form = document.createElement('form');
		// form.setAttribute('method', 'post');
		// form.setAttribute('enctype', 'multipart/form-data');
		// Because in this case file won't be attached to request
		var form = _ajax_uploader.toElement('<form method="post" enctype="multipart/form-data"></form>');

		var queryString = _ajax_uploader.obj2url(params, this._options.action);

		form.setAttribute('action', queryString);
		form.setAttribute('target', iframe.name);
		form.style.display = 'none';
		document.body.appendChild(form);

		return form;
	}
});

/**
 * Class for uploading files using xhr
 * @inherits _ajax_uploader.UploadHandlerAbstract
 */
_ajax_uploader.UploadHandlerXhr = function(o) {
	_ajax_uploader.UploadHandlerAbstract.apply(this, arguments);

	this._files = [];
	this._xhrs = [];

	// current loaded size in bytes for each file 
	this._loaded = [];
};

// static method
_ajax_uploader.UploadHandlerXhr.isSupported = function() {

	var input = document.createElement('input');
	input.type = 'file';

	return (
		'multiple' in input &&
		typeof File != "undefined" &&
		typeof(new XMLHttpRequest()).upload != "undefined");
};

// @inherits _ajax_uploader.UploadHandlerAbstract
_ajax_uploader.extend(_ajax_uploader.UploadHandlerXhr.prototype, _ajax_uploader.UploadHandlerAbstract.prototype)

_ajax_uploader.extend(_ajax_uploader.UploadHandlerXhr.prototype, {
	/**
	 * Adds file to the queue
	 * Returns id to use with upload, cancel
	 **/
	add: function(file) {
		if (!(file instanceof File)) {
			throw new Error('Passed obj in not a File (in _ajax_uploader.UploadHandlerXhr)');
		}

		return this._files.push(file) - 1;
	},
	getName: function(id) {
		var file = this._files[id];
		// fix missing name in Safari 4
		return file.fileName != null ? file.fileName : file.name;
	},
	getSize: function(id) {
		var file = this._files[id];
		return file.fileSize != null ? file.fileSize : file.size;
	},
	/**
	 * Returns uploaded bytes for file identified by id
	 */
	getLoaded: function(id) {
		return this._loaded[id] || 0;
	},
	/**
	 * Sends the file identified by id and additional query params to the server
	 * @param {Object} params name-value string pairs
	 */
	_upload: function(id, params) {
		var file = this._files[id],
			name = this.getName(id),
			size = this.getSize(id);

		this._loaded[id] = 0;

		var xhr = this._xhrs[id] = new XMLHttpRequest();
		var self = this;

		xhr.upload.onprogress = function(e) {
			if (e.lengthComputable) {
				self._loaded[id] = e.loaded;
				self._options.onProgress(id, name, e.loaded, e.total);
			}
		};

		xhr.onreadystatechange = function() {
			if (xhr.readyState == 4) {
				self._onComplete(id, xhr);
			}
		};

		// build query string
		params = params || {};
		params['qqfile'] = name;
		var queryString = _ajax_uploader.obj2url(params, this._options.action);

		xhr.open("POST", queryString, true);
		xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");
		xhr.setRequestHeader("X-File-Name", encodeURIComponent(name));
		xhr.setRequestHeader("Content-Type", "application/octet-stream");
		xhr.send(file);
	},
	_onComplete: function(id, xhr) {
		// the request was aborted/cancelled
		if (!this._files[id]) return;

		var name = this.getName(id);
		var size = this.getSize(id);

		this._options.onProgress(id, name, size, size);

		if (xhr.status == 200) {
			this.log("xhr - server response received");
			this.log("responseText = " + xhr.responseText);

			var response;

			try {
				response = eval("(" + xhr.responseText + ")");
			} catch (err) {
				response = {};
			}

			this._options.onComplete(id, name, response);

		} else {
			this._options.onComplete(id, name, {});
		}

		this._files[id] = null;
		this._xhrs[id] = null;
		this._dequeue(id);
	},
	_cancel: function(id) {
		this._options.onCancel(id, this.getName(id));

		this._files[id] = null;

		if (this._xhrs[id]) {
			this._xhrs[id].abort();
			this._xhrs[id] = null;
		}
	}
});

function _ajax_uploader_delete_attach(url, el) {
	var this_el = el;

	$.get(url, function(result) {
		if (result.errno == "-1") {
			$.alert(result.err);
		} else {
			this_el.fadeOut();
			this_el.remove();
			set_sort_id();
		}
	}, 'json');
}

function _ajax_uploader_append_file(selecter, v) {
	var url = '';

	if (typeof(v['thumb']) != 'undefined') {
		url = v['thumb'];
	}

	var html = '<li data-id="' + v['id'] + '">' +
		'<div class="mod-head aw-icon upload-' + v['class_name'] + '" ' + (url == null || url == '' ? '' : 'style="background-image:url(' + url + ')"') + '></div>' +
		'<div class="mod-body">' +
		'<p class="_ajax_upload-file hide" title="' + v['file_name'] + '">' + (v['file_name']).substring(0, 10) + '...</p>' +
		'</div>' +
		'<div class="mod-footer _ajax_upload-inset">' +
		'<a class="prev"><i class="icon icon-triangle-left-mini"></i></a>' +
		'<a href="' + v['delete_link'] + '" class="_ajax_upload_delete_file" onclick="if (confirm(\'' + _t('确认删除?') + '\')) { _ajax_uploader_delete_attach(this.href, $(this).parents(\'li\')) } return false;">' + _t('删除') + '</a> ' +
		'<a class="next"><i class="icon icon-triangle-right-mini"></i></a>';
	html += '</div></li>';


	$(selecter).append(html);
}