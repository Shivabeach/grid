"use strict";const name=document.querySelector(".name"),age=document.querySelector(".age"),balance=document.querySelector(".balance");let inputName=document.querySelector(".inputName");const login=document.getElementById("login"),welcome=document.querySelector(".welcome"),deposit=document.querySelector(".deposit"),withdraw=document.querySelector(".withdraw"),left=document.getElementById("left"),limit1={name:"Brad",age:21,inputs:[225,-50,150,-55,260,14,-80,100]},limit2={name:"Bill",age:56,inputs:[125,-50,100,-86,160,-14,-60]},limit3={name:"Kathy",age:45,inputs:[25,150,-60,114,-60,25,-40,55,200]},limit4={name:"Glenn",age:34,inputs:[-25,150,160,-114,68,89,-159]},accounts=[limit1,limit2,limit3,limit4],displayBalance=function(e){let t=e.reduce((e,t)=>e+t,0);balance.innerText="$".concat(t)},showDeposits=function(e){let t=e.inputs.filter(e=>e>0).reduce((e,t)=>e+t,0);deposit.innerText="$".concat(t);let n=e.inputs.filter(e=>e<0).reduce((e,t)=>e+t,0);withdraw.textContent="$".concat(n)};let currentAccount;login.addEventListener("click",(function(e){e.preventDefault(),currentAccount=accounts.find(e=>e.name===inputName.value),currentAccount.name===inputName.value&&(welcome.textContent="Welcome back ".concat(currentAccount.name),name.textContent="Name: ".concat(currentAccount.name),age.textContent="Age: ".concat(currentAccount.age),inputName.value="",left.style.opacity=1,displayBalance(currentAccount.inputs),showDeposits(currentAccount))}));