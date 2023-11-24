import{W as x,a,j as e,b as C,r as _,d as w}from"./app-18ddec6e.js";import{A as O}from"./AuthenticatedLayout-b8dfdd7c.js";import{s as S,a as M,u as j,_ as k,b as B,c as T,d as P,T as $,C as I,F as A,I as z,S as F,M as L}from"./Select-cb421e51.js";import{e as W}from"./extendSxProp-8ca18272.js";var n=(t=>(t.Created="created",t.Confirmed="confirmed",t.Make="make",t.Completed="completed",t.Canceled="canceled",t))(n||{});function E({auth:t,orders:s}){const{errors:r}=x({status:"pending",order_id:""});return a(O,{user:t.user,header:e("h2",{className:"font-semibold text-xl text-gray-800 leading-tight",children:"Orders"}),children:[e(C,{title:"Orders"}),r.order_id?e("div",{children:r.order_id}):null,e("div",{className:"py-12",children:e("div",{className:"max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6",children:e(g,{orders:s})})})]})}const V=Object.freeze(Object.defineProperty({__proto__:null,OrderStatus:n,default:E},Symbol.toStringTag,{value:"Module"})),D=["className","component"];function H(t={}){const{themeId:s,defaultTheme:r,defaultClassName:d="MuiBox-root",generateClassName:l}=t,m=S("div",{shouldForwardProp:o=>o!=="theme"&&o!=="sx"&&o!=="as"})(M);return _.forwardRef(function(p,b){const c=j(r),u=W(p),{className:y,component:N="div"}=u,v=k(u,D);return e(m,B({as:N,ref:b,className:T(y,l?l(d):d),theme:s&&c[s]||c},v))})}const R=P(),U=H({themeId:$,defaultTheme:R,defaultClassName:"MuiBox-root",generateClassName:I.generate}),G=U,Y=[{id:n.Confirmed,title:"Confirm"},{id:n.Make,title:"Make"},{id:n.Completed,title:"Complete"},{id:n.Canceled,title:"Cancel"}];function f({order:t}){const{patch:s,setData:r,data:d}=x({status:t.status,order_id:t.id}),l=()=>{confirm(`Are you sure you want to change the status of this order to ${d.status}?`),s(route("admin.orders.update.status"))},m=i=>{r("status",i.target.value)};return a("div",{children:[e(G,{sx:{maxWidth:150,mt:3},children:a(A,{fullWidth:!0,children:[e(z,{id:"order-status",children:"Status"}),e(F,{labelId:"order-status",id:"order-status",value:d.status,label:"Status",onChange:m,children:Y.map(i=>e(L,{value:i.id,children:i.title},i.id))})]})}),e("div",{className:"py-3",children:e("button",{onClick:l,type:"button",className:"rounded bg-indigo-600 px-2 py-1 text-md font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600",children:"Update"})})]})}const X=Object.freeze(Object.defineProperty({__proto__:null,default:f},Symbol.toStringTag,{value:"Module"}));function h({status:t}){return t===n.Created?e("span",{className:"inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium text-orange-300 ring-1 ring-inset ring-gray-500/10",children:"Created"}):t===n.Confirmed?e("span",{className:"inline-flex items-center rounded-md bg-yellow-400 px-2 py-1 text-xs font-medium text-white ring-1 ring-inset ring-gray-500/10",children:"Confirmed"}):t===n.Make?e("span",{className:"inline-flex items-center rounded-md bg-orange-300 px-2 py-1 text-xs font-medium text-white ring-1 ring-inset ring-gray-500/10",children:"Make"}):t===n.Completed?e("span",{className:"inline-flex items-center rounded-md bg-green-600 px-2 py-1 text-xs font-medium text-white ring-1 ring-inset ring-gray-500/10",children:"Completed"}):t===n.Canceled?e("span",{className:"inline-flex items-center rounded-md bg-red-600 px-2 py-1 text-xs font-medium text-white ring-1 ring-inset ring-gray-500/10",children:"Canceled"}):e("span",{className:"inline-flex items-center rounded-md bg-red-600 px-2 py-1 text-xs font-medium text-white ring-1 ring-inset ring-gray-500/10",children:"Unknown"})}const Z=Object.freeze(Object.defineProperty({__proto__:null,default:h},Symbol.toStringTag,{value:"Module"}));function g({orders:t}){return a("main",{className:"mx-auto px-4 py-16 sm:px-6 sm:pb-32 sm:pt-24 lg:px-8",children:[a("div",{className:"mx-auto max-w-2xl",children:[e("h1",{className:"text-3xl font-bold tracking-tight text-gray-900",children:"Your Orders"}),e("p",{className:"mt-2 text-sm text-gray-500",children:"Check the status of recent orders, manage returns, and discover similar products."})]}),e("div",{className:"mx-auto max-w-2xl mt-12 space-y-16 sm:mt-16",children:t.map(s=>a("section",{"aria-labelledby":`${s.id}-heading`,children:[a("div",{className:"space-y-1 md:flex md:items-baseline md:space-x-4 md:space-y-0",children:[a("h2",{id:`${s.id}-heading`,className:"text-lg font-medium text-gray-900 md:flex-shrink-0 w-2/4",children:["Order for ",e("b",{children:s.customer_name})]}),e("div",{className:"space-y-5 sm:flex sm:items-baseline sm:justify-between sm:space-y-0 md:min-w-0 md:flex-1",children:a("div",{className:"flex text-sm font-medium",children:[e(h,{status:s.status}),e("div",{className:"ml-4 border-l border-gray-200 pl-4 sm:ml-6 sm:pl-6",children:e(w,{href:route("admin.order_details",{id:s.id}),className:"text-indigo-600 hover:text-indigo-500 text-xl",children:"دیدن سفارش"})})]})})]}),e(f,{order:s,onSelect:()=>null})]},s.id))})]})}const ee=Object.freeze(Object.defineProperty({__proto__:null,default:g},Symbol.toStringTag,{value:"Module"}));export{h as O,V as a,X as b,Z as c,ee as d};