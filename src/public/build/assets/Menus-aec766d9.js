import{r as d,j as e,a as l,c as n}from"./app-18ddec6e.js";function p({menus:i}){const[a,c]=d.useState(i),r=async t=>{n.delete(`/api/menu/${t}`).catch(s=>{console.log(s.response.data)}).then(()=>{c(a.filter(s=>s.id!==t)),alert("Category deleted successfully")})};return e("div",{children:e("div",{className:"mt-8 flow-root",children:e("div",{className:"-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8",children:e("div",{className:"inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8",children:e("div",{className:"overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg",children:l("table",{className:"min-w-full divide-y divide-gray-300",children:[e("thead",{className:"bg-gray-50",children:l("tr",{children:[e("th",{scope:"col",className:"px-3 py-3.5 text-left text-sm font-semibold text-gray-900",children:"Name"}),e("th",{scope:"col",className:"px-3 py-3.5 text-left text-sm font-semibold text-gray-900",children:"Price"}),e("th",{scope:"col",className:"px-3 py-3.5 text-left text-sm font-semibold text-gray-900",children:"Description"}),e("th",{scope:"col",className:"relative py-3.5 pl-3 pr-4 sm:pr-6",children:e("span",{className:"sr-only",children:"Delete"})})]})}),e("tbody",{className:"divide-y divide-gray-200 bg-white",children:a.map(t=>l("tr",{children:[e("td",{className:"whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6",children:t.name}),e("td",{className:"whitespace-nowrap px-3 py-4 text-sm text-gray-500",children:t.price}),e("td",{className:"whitespace-nowrap px-3 py-4 text-sm text-gray-500",children:t.description}),e("td",{className:"relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6",children:e("span",{onClick:()=>r(t.id),className:"text-indigo-600 hover:text-indigo-900",children:"Delete"})})]},t.id))})]})})})})})})}export{p as default};