KISSY.add(function(a){function b(c){b.superclass.constructor.call(this,c);this._init()}a.extend(b,a.Base);a.augment(b,{_init:function(){var c=this;c._initDom();c._initEvent()},_initDom:function(){var c=this,e=c.get("srcNode"),d=a.one(e);c.set("el",d)},_initEvent:function(){var c=this,d=c.get("el");d.one(".close").on("click",function(e){e.halt();c.hide()})},show:function(){var c=this,d=c.get("el");d.show()},hide:function(){var c=this,d=c.get("el");d.hide()}});return b});