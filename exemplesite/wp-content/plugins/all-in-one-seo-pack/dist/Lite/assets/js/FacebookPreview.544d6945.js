import{d as i}from"./dannie-profile.e0152a9f.js";import{B as n}from"./Img.36a4ce1e.js";import{h as r}from"./index.c9bc1c73.js";import{n as c}from"./vueComponentNormalizer.58b0a173.js";var l=function(){var t=this,s=t.$createElement,e=t._self._c||s;return e("div",{staticClass:"aioseo-facebook-preview"},[e("div",{staticClass:"facebook-post"},[e("div",{staticClass:"facebook-header"},[e("div",{staticClass:"profile-photo"},[e("img",{attrs:{alt:"Facebook Preview Image",src:t.$getAssetUrl(t.dannieProfileImg)}})]),e("div",{staticClass:"poster"},[e("div",{staticClass:"poster-name"},[t._v(" "+t._s(t.appName)+" ")]),e("div",{staticClass:"poster-date"},[t._v(" "+t._s(t.date)+" ")])]),t._m(0)]),e("div",{staticClass:"facebook-content",class:{vertical:t.images[t.image]&&t.images[t.image].vertical}},[e("base-img",{attrs:{debounce:!1,src:t.image},on:{images:function(o){return t.images=o}}}),t.loading?e("div",{staticClass:"loader"},[e("core-loader")],1):t._e(),e("div",{staticClass:"facebook-site-description"},[e("div",{staticClass:"site-domain"},[t._t("site-url",function(){return[t._v(" "+t._s(t.$aioseo.urls.domain)+" ")]})],2),e("div",{staticClass:"site-title"},[t._t("site-title")],2),e("div",{staticClass:"site-description"},[t._t("site-description")],2)])],1),e("div",{staticClass:"facebook-footer"})])])},u=[function(){var t=this,s=t.$createElement,e=t._self._c||s;return e("div",{staticClass:"ellipsis"},[e("div"),e("div"),e("div")])}];const _={components:{BaseImg:n,CoreLoader:r},props:{image:String,loading:{type:Boolean,default(){return!1}}},data(){return{dannieProfileImg:i,images:{}}},computed:{appName(){return"All in One SEO"},date(){const t=new Date;return t.toLocaleString("default",{month:"long"})+" "+t.getDay()}}},a={};var d=c(_,l,u,!1,m,null,null,null);function m(t){for(let s in a)this[s]=a[s]}const C=function(){return d.exports}();export{C};