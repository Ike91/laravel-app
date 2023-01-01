<div class="centerr">
    <div class="ring"></div>
    <span>loading...</span>
 </div>
 <style>
     .centerr{
  display: flex;
  text-align: center;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
}
.centerr .ring{
  position: absolute;
  width: 150px;
  height: 150px;
  border-radius: 50%;
  animation: ring 3s linear infinite;
}
@keyframes ring {
  0%{
    transform: rotate(0deg);
    box-shadow: 1px 5px 2px #21D4FD;
  }
  50%{
    transform: rotate(180deg);
    box-shadow: 1px 5px 2px #02282e;
  }
  100%{
    transform: rotate(360deg);
    box-shadow: 1px 5px 2px  #00C9A7;
  }
}
.ring:before{
  position: absolute;
  content: '';
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  border-radius: 50%;
  box-shadow: 0 0 5px rgba(255,255,255,.3);
}
.centerr span{
  color:  #5eb2c7;
  font-size: 20px;
  text-transform: uppercase;
  letter-spacing: 1px;
  line-height: 200px;
  animation: text 3s ease-in-out infinite;
}
@keyframes text {
  50%{
    color: black;
  }
}
</style>