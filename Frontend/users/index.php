<?php session_start(); ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
<?php include "../../Backend/db/connect.db.php";
include "../assets/header.php";
include "../assets/user_nav.php";

$sql = "SELECT * FROM enrolltbl";
$query = $db->query($sql);

?>
<div class="w-screen h-full bg-[#f1f4f9]">
   <div class="flex p-4">
      <div>
         <!-- /* -------------------------------------------------------------------------- */
         /*                                   โปรไฟล์                                  */
         /* -------------------------------------------------------------------------- */ -->
         <div class="flex flex-col items-center py-[26px] px-[98px] gap-5 w-[383px] h-[474px] bg-white rounded-[20px]">
            <div class="avatar">
               <div class="w-[162px] rounded-full ring ring-info ring-offset-base-100 ring-offset-2">
                  <img src="../image/<?php echo $_SESSION['Student_Img']; ?>" class="w-[162px] h-[162px] rounded-[50%] dhs shadow-md" alt="">
               </div>
            </div>

            <div id="name" class="flex items-center flex-col w-[317px] h-[119px]">
               <span class="not-italic font-normal text-[28px] "><?php echo $_SESSION['Student_FirstName'] . "&nbsp;" . $_SESSION['Student_LastName']; ?></span>
            </div>
            <div class="flex flex-row justify-center items-center p-0 gap-[75px] ">

               <div class="flex-col flex items-center p-0 gap-[12px] w-[107px] h-[79px]">
                  <span class="not-italic font-bold text-[28px] text-[#0093fb]">4.00</span>
                  <label class="font-medium text-[20px] text-[#0093fb]">ผลการเรียน</label>
               </div>
               <div class="flex-col flex items-center p-0 gap-[12px] w-[107px] h-[79px]">
                  <span class="not-italic font-bold text-[28px] text-[#0093fb]">100</span>
                  <label class="font-medium text-[20px] text-[#0093fb]">จิตพิสัย</label>
               </div>

            </div>
         </div>
         <div class=" justify-center flex">
            <ul class="relative flex flex-col gap-12 py-12 pl-6 before:absolute before:top-0 before:left-6 before:h-full before:border before:-translate-x-1/2 before:border-slate-200 before:border-dashed after:absolute after:top-6 after:left-6 after:bottom-6 after:border after:-translate-x-1/2 after:border-slate-200 ">
               <li role="article" class="relative pl-6 ">
                  <span class="absolute left-0 z-10 flex items-center justify-center w-10 h-6 text-white text-[12px] -translate-x-1/2 rounded-full ring-2 ring-white bg-emerald-500 ">
                     4.00
                  </span>
                  <div class="flex flex-col flex-1 gap-0">
                     <h4 class="text-sm font-medium text-slate-700"> ภาคเรียน 1/2564 </h4>
                     <p class="text-xs text-slate-500">ผลการเรียน อยู่ในเกณฑ์ ดีมาก</p>
                  </div>
                  <!-- /* -------------------------------------------------------------------------- */
              /*                               เกรดเพิ่มเติม 1                              */
              /* -------------------------------------------------------------------------- */ -->
                  <button class="text-[13px] text-pink-600 font-medium hover:text-pink-300" onclick="my_modal_1.showModal()">ดูเพิ่ม</button>
                  <dialog id="my_modal_1" class="modal ">
                     <form method="dialog" class="modal-box  ">
                        <button class="btn btn-sm btn-circle btn-ghost absolute  right-2 top-2">✕</button>
                        <span class="text-white">-----------------------------------------------------------------------</span>
                        <h3 class="font-bold text-xl">ภาคเรียน 1/2564</h3>
                        <div class="flex">
                           <div class="flex justify-center items-center">
                              <span class="text-[40px] text-green-500 font-bold">4</span>
                           </div>
                           <div class="ml-4">
                              <h2 class="pt-4 text-lg font-medium">ภาษาไทยพื้นฐาน</h2>
                              <h5 class="text-lg font-medium">20000-1001</h5>
                           </div>
                        </div>
                        <p class="py-2">หน่วยกิต 2, ทฤษฎี 2 ชม.,ปฏิบัติ ชม.</p>
                        <div class="flex">
                           <div class="flex justify-center items-center">
                              <span class="text-[40px] text-green-500 font-bold">2</span>
                           </div>
                           <div class="ml-4">
                              <h2 class="pt-4 text-lg font-medium">คณิตศาสตร์</h2>
                              <h5 class="text-lg font-medium">20000-1001</h5>
                           </div>
                        </div>
                        <p class="py-2">หน่วยกิต 2, ทฤษฎี 2 ชม.,ปฏิบัติ ชม.</p>
                        <div class="flex">
                           <div class="flex justify-center items-center">
                              <span class="text-[40px] text-green-400 font-bold">3</span>
                           </div>
                           <div class="ml-4">
                              <h2 class="pt-4 text-lg font-medium">Python</h2>
                              <h5 class="text-lg font-medium">20000-1001</h5>
                           </div>
                        </div>
                        <p class="py-2">หน่วยกิต 2, ทฤษฎี 2 ชม.,ปฏิบัติ ชม.</p>
                        <div class="flex">
                           <div class="flex justify-center items-center">
                              <span class="text-[40px] text-yellow-300 font-bold">2</span>
                           </div>
                           <div class="ml-4">
                              <h2 class="pt-4 text-lg font-medium">หน้าที่พลเมือง</h2>
                              <h5 class="text-lg font-medium">20000-1001</h5>
                           </div>
                        </div>
                        <p class="py-2">หน่วยกิต 2, ทฤษฎี 2 ชม.,ปฏิบัติ ชม.</p>
                        <div class="flex">
                           <div class="flex justify-center items-center">
                              <span class="text-[40px] text-green-500 font-bold">4</span>
                           </div>
                           <div class="ml-4">
                              <h2 class="pt-4 text-lg font-medium">ธุรกิจและผู้ประกอบการ</h2>
                              <h5 class="text-lg font-medium">20000-1001</h5>
                           </div>
                        </div>
                        <p class="py-2">หน่วยกิต 2, ทฤษฎี 2 ชม.,ปฏิบัติ ชม.</p>
                     </form>
                  </dialog>
               </li>
               <li class="relative pl-6 ">
                  <span class="absolute left-0 z-10 flex items-center justify-center w-10 h-6 text-white text-[12px] -translate-x-1/2 rounded-full ring-2 ring-white bg-emerald-500 ">
                     3.90
                  </span>
                  <div class="flex flex-col flex-1 gap-0">
                     <h4 class="text-sm font-medium text-slate-700"> ภาคเรียน 2/2564</h4>
                     <p class="text-xs text-slate-500">ผลการเรียน อยู่ในเกณฑ์ ดีมาก</p>
                  </div>
                  <!-- /* -------------------------------------------------------------------------- */
              /*                               เกรดเพิ่มเติม 2                              */
              /* -------------------------------------------------------------------------- */ -->
                  <button class="text-[13px] text-pink-600 font-medium hover:text-pink-300" onclick="my_modal_2.showModal()">ดูเพิ่ม</button>
                  <dialog id="my_modal_2" class="modal ">
                     <form method="dialog" class="modal-box  ">
                        <button class="btn btn-sm btn-circle btn-ghost absolute  right-2 top-2">✕</button>
                        <span class="text-white">-----------------------------------------------------------------------</span>
                        <h3 class="font-bold text-xl">ภาคเรียน 2/2564</h3>
                        <div class="flex">
                           <div class="flex justify-center items-center">
                              <span class="text-[40px] text-green-500 font-bold">2</span>
                           </div>
                           <div class="ml-4">
                              <h2 class="pt-4 text-lg font-medium">ภาษาไทยพื้นฐาน</h2>
                              <h5 class="text-lg font-medium">20000-1001</h5>
                           </div>
                        </div>
                        <p class="py-2">หน่วยกิต 2, ทฤษฎี 2 ชม.,ปฏิบัติ ชม.</p>
                        <div class="flex">
                           <div class="flex justify-center items-center">
                              <span class="text-[40px] text-green-500 font-bold">2</span>
                           </div>
                           <div class="ml-4">
                              <h2 class="pt-4 text-lg font-medium">คณิตศาสตร์</h2>
                              <h5 class="text-lg font-medium">20000-1001</h5>
                           </div>
                        </div>
                        <p class="py-2">หน่วยกิต 2, ทฤษฎี 2 ชม.,ปฏิบัติ ชม.</p>
                        <div class="flex">
                           <div class="flex justify-center items-center">
                              <span class="text-[40px] text-green-400 font-bold">2</span>
                           </div>
                           <div class="ml-4">
                              <h2 class="pt-4 text-lg font-medium">Python</h2>
                              <h5 class="text-lg font-medium">20000-1001</h5>
                           </div>
                        </div>
                        <p class="py-2">หน่วยกิต 2, ทฤษฎี 2 ชม.,ปฏิบัติ ชม.</p>
                        <div class="flex">
                           <div class="flex justify-center items-center">
                              <span class="text-[40px] text-yellow-300 font-bold">2</span>
                           </div>
                           <div class="ml-4">
                              <h2 class="pt-4 text-lg font-medium">หน้าที่พลเมือง</h2>
                              <h5 class="text-lg font-medium">20000-1001</h5>
                           </div>
                        </div>
                        <p class="py-2">หน่วยกิต 2, ทฤษฎี 2 ชม.,ปฏิบัติ ชม.</p>
                        <div class="flex">
                           <div class="flex justify-center items-center">
                              <span class="text-[40px] text-green-500 font-bold">2</span>
                           </div>
                           <div class="ml-4">
                              <h2 class="pt-4 text-lg font-medium">ธุรกิจและผู้ประกอบการ</h2>
                              <h5 class="text-lg font-medium">20000-1001</h5>
                           </div>
                        </div>
                        <p class="py-2">หน่วยกิต 2, ทฤษฎี 2 ชม.,ปฏิบัติ ชม.</p>
                     </form>
                  </dialog>
               </li>
               <li class="relative pl-6 ">
                  <span class="absolute left-0 z-10 flex items-center justify-center w-10 h-6 text-white text-[12px] -translate-x-1/2 rounded-full ring-2 ring-white bg-amber-500 ">
                     3.49
                  </span>
                  <div class="flex flex-col flex-1 gap-0">
                     <h4 class="text-sm font-medium text-slate-700"> ภาคเรียน 1/2565 </h4>
                     <p class="text-xs text-slate-500">ผลการเรียน อยู่ในเกณฑ์ ดี</p>
                  </div>

                  <!-- /* -------------------------------------------------------------------------- */
              /*                               เกรดเพิ่มเติม 3                             */
              /* -------------------------------------------------------------------------- */ -->
                  <button class="text-[13px] text-pink-600 font-medium hover:text-pink-300" onclick="my_modal_3.showModal()">ดูเพิ่ม</button>
                  <dialog id="my_modal_3" class="modal ">
                     <form method="dialog" class="modal-box  ">
                        <button class="btn btn-sm btn-circle btn-ghost absolute  right-2 top-2">✕</button>
                        <span class="text-white">-----------------------------------------------------------------------</span>
                        <h3 class="font-bold text-xl">ภาคเรียน 1/2565</h3>
                        <div class="flex">
                           <div class="flex justify-center items-center">
                              <span class="text-[40px] text-red-500 font-bold">1</span>
                           </div>
                           <div class="ml-4">
                              <h2 class="pt-4 text-lg font-medium">ภาษาไทยพื้นฐาน</h2>
                              <h5 class="text-lg font-medium">20000-1001</h5>
                           </div>
                        </div>
                        <p class="py-2">หน่วยกิต 2, ทฤษฎี 2 ชม.,ปฏิบัติ ชม.</p>
                        <div class="flex">
                           <div class="flex justify-center items-center">
                              <span class="text-[40px] text-green-500 font-bold">2</span>
                           </div>
                           <div class="ml-4">
                              <h2 class="pt-4 text-lg font-medium">คณิตศาสตร์</h2>
                              <h5 class="text-lg font-medium">20000-1001</h5>
                           </div>
                        </div>
                        <p class="py-2">หน่วยกิต 2, ทฤษฎี 2 ชม.,ปฏิบัติ ชม.</p>
                        <div class="flex">
                           <div class="flex justify-center items-center">
                              <span class="text-[40px] text-green-400 font-bold">3</span>
                           </div>
                           <div class="ml-4">
                              <h2 class="pt-4 text-lg font-medium">Python</h2>
                              <h5 class="text-lg font-medium">20000-1001</h5>
                           </div>
                        </div>
                        <p class="py-2">หน่วยกิต 2, ทฤษฎี 2 ชม.,ปฏิบัติ ชม.</p>
                        <div class="flex">
                           <div class="flex justify-center items-center">
                              <span class="text-[40px] text-yellow-300 font-bold">2</span>
                           </div>
                           <div class="ml-4">
                              <h2 class="pt-4 text-lg font-medium">หน้าที่พลเมือง</h2>
                              <h5 class="text-lg font-medium">20000-1001</h5>
                           </div>
                        </div>
                        <p class="py-2">หน่วยกิต 2, ทฤษฎี 2 ชม.,ปฏิบัติ ชม.</p>
                        <div class="flex">
                           <div class="flex justify-center items-center">
                              <span class="text-[40px] text-green-500 font-bold">4</span>
                           </div>
                           <div class="ml-4">
                              <h2 class="pt-4 text-lg font-medium">ธุรกิจและผู้ประกอบการ</h2>
                              <h5 class="text-lg font-medium">20000-1001</h5>
                           </div>
                        </div>
                        <p class="py-2">หน่วยกิต 2, ทฤษฎี 2 ชม.,ปฏิบัติ ชม.</p>
                     </form>
                  </dialog>
               </li>
               <li class="relative pl-6 ">
                  <span class="absolute left-0 z-10 flex items-center justify-center w-10 h-6 text-white text-[12px] -translate-x-1/2 rounded-full ring-2 ring-white bg-emerald-500 ">
                     3.99
                  </span>
                  <div class="flex flex-col flex-1 gap-0">
                     <h4 class="text-sm font-medium text-slate-700"> ภาคเรียน 2/2565 </h4>
                     <p class="text-xs text-slate-500">ผลการเรียน อยู่ในเกณฑ์ ดีมาก</p>
                  </div>
                  <!-- /* -------------------------------------------------------------------------- */
              /*                               เกรดเพิ่มเติม 4                              */
              /* -------------------------------------------------------------------------- */ -->
                  <button class="text-[13px] text-pink-600 font-medium hover:text-pink-300" onclick="my_modal_4.showModal()">ดูเพิ่ม</button>
                  <dialog id="my_modal_4" class="modal ">
                     <form method="dialog" class="modal-box  ">
                        <button class="btn btn-sm btn-circle btn-ghost absolute  right-2 top-2">✕</button>
                        <span class="text-white">-----------------------------------------------------------------------</span>
                        <h3 class="font-bold text-xl">ภาคเรียน 2/2565</h3>
                        <div class="flex">
                           <div class="flex justify-center items-center">
                              <span class="text-[40px] text-green-500 font-bold">4</span>
                           </div>
                           <div class="ml-4">
                              <h2 class="pt-4 text-lg font-medium">ภาษาไทยพื้นฐาน</h2>
                              <h5 class="text-lg font-medium">20000-1001</h5>
                           </div>
                        </div>
                        <p class="py-2">หน่วยกิต 2, ทฤษฎี 2 ชม.,ปฏิบัติ ชม.</p>
                        <div class="flex">
                           <div class="flex justify-center items-center">
                              <span class="text-[40px] text-green-500 font-bold">2</span>
                           </div>
                           <div class="ml-4">
                              <h2 class="pt-4 text-lg font-medium">คณิตศาสตร์</h2>
                              <h5 class="text-lg font-medium">20000-1001</h5>
                           </div>
                        </div>
                        <p class="py-2">หน่วยกิต 2, ทฤษฎี 2 ชม.,ปฏิบัติ ชม.</p>
                        <div class="flex">
                           <div class="flex justify-center items-center">
                              <span class="text-[40px] text-green-400 font-bold">3</span>
                           </div>
                           <div class="ml-4">
                              <h2 class="pt-4 text-lg font-medium">Python</h2>
                              <h5 class="text-lg font-medium">20000-1001</h5>
                           </div>
                        </div>
                        <p class="py-2">หน่วยกิต 2, ทฤษฎี 2 ชม.,ปฏิบัติ ชม.</p>
                        <div class="flex">
                           <div class="flex justify-center items-center">
                              <span class="text-[40px] text-yellow-300 font-bold">2</span>
                           </div>
                           <div class="ml-4">
                              <h2 class="pt-4 text-lg font-medium">หน้าที่พลเมือง</h2>
                              <h5 class="text-lg font-medium">20000-1001</h5>
                           </div>
                        </div>
                        <p class="py-2">หน่วยกิต 2, ทฤษฎี 2 ชม.,ปฏิบัติ ชม.</p>
                        <div class="flex">
                           <div class="flex justify-center items-center">
                              <span class="text-[40px] text-green-500 font-bold">4</span>
                           </div>
                           <div class="ml-4">
                              <h2 class="pt-4 text-lg font-medium">ธุรกิจและผู้ประกอบการ</h2>
                              <h5 class="text-lg font-medium">20000-1001</h5>
                           </div>
                        </div>
                        <p class="py-2">หน่วยกิต 2, ทฤษฎี 2 ชม.,ปฏิบัติ ชม.</p>
                     </form>
                  </dialog>
               </li>

            </ul>

         </div>
      </div>
      <div class="w-full">
         <!-- /* -------------------------------------------------------------------------- */
         /*                                ประชาสัมพันธ์                               */
         /* -------------------------------------------------------------------------- */ -->
         <div id="Notify" class="w-full h-[275px] rounded-[20px] ml-[10px] bg-[#0093fb]">
            <div class="flex flex-col items-center p-4 gap-[9px] w-[237px] h-[71px]">
               <div class="flex flex-row items-center p-0 gap-[17px]">
                  <svg width="19" height="21" viewBox="0 0 19 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" clip-rule="evenodd" d="M2.62522 7.50366C2.62522 5.71345 3.33638 3.99656 4.60225 2.73069C5.86812 1.46482 7.58501 0.753662 9.37522 0.753662C11.1654 0.753662 12.8823 1.46482 14.1482 2.73069C15.4141 3.99656 16.1252 5.71345 16.1252 7.50366V8.25366C16.1252 10.3767 16.9252 12.3107 18.2432 13.7737C18.3253 13.8647 18.3839 13.9744 18.4138 14.0932C18.4436 14.2121 18.4439 14.3364 18.4146 14.4554C18.3853 14.5744 18.3273 14.6845 18.2457 14.7758C18.164 14.8672 18.0612 14.9372 17.9462 14.9797C16.4022 15.5497 14.7862 15.9697 13.1152 16.2227C13.1528 16.7368 13.0841 17.2532 12.9131 17.7395C12.7422 18.2259 12.4729 18.6718 12.1219 19.0494C11.771 19.427 11.3459 19.7282 10.8733 19.9341C10.4007 20.1401 9.89073 20.2463 9.37522 20.2463C8.8597 20.2463 8.34972 20.1401 7.87713 19.9341C7.40454 19.7282 6.97948 19.427 6.62851 19.0494C6.27754 18.6718 6.00819 18.2259 5.83729 17.7395C5.66638 17.2532 5.59759 16.7368 5.63522 16.2227C3.98687 15.9729 2.36821 15.5561 0.804217 14.9787C0.689351 14.9363 0.586614 14.8664 0.504979 14.7751C0.423344 14.6839 0.365294 14.574 0.335898 14.4551C0.306503 14.3363 0.306657 14.212 0.336346 14.0932C0.366035 13.9744 0.424357 13.8647 0.506217 13.7737C1.87302 12.2603 2.6283 10.2929 2.62522 8.25366V7.50366ZM7.12722 16.4037C7.11442 16.069 7.1631 17.0095 7.203 17.2934C7.37751 17.5773 7.54103 17.8366 7.75104 18.0556C7.96105 18.2747 8.21319 18.449 8.49231 18.568C8.77143 18.6871 9.07176 18.7485 9.37522 18.7485C9.67868 18.7485 9.979 18.6871 10.2581 18.568C10.5372 18.449 10.7894 18.2747 10.9994 18.0556C11.2094 17.8366 11.3729 17.5773 11.4801 17.2934C11.5873 17.0095 11.636 16.069 11.6232 16.4037C10.1276 16.5384 8.62286 16.5384 7.12722 16.4037Z" fill="white" />
                  </svg>
                  <label for="" class="text-white text-[24px] font-bold">ประชาสัมพันธ์</label>
               </div>
               <div class="flex justify-center items-center gap-[13px]">
                  <svg width="20" height="20" class="ml-4 " viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" clip-rule="evenodd" d="M5.25 0.125C5.48206 0.125 5.0462 0.217187 5.86872 0.381281C6.03281 0.545376 6.125 0.767936 6.125 1V2.75H16.625V1C16.625 0.767936 16.7172 0.545376 16.8813 0.381281C17.0454 0.217187 17.2679 0.125 17.5 0.125C17.7321 0.125 17.9546 0.217187 18.1187 0.381281C18.2828 0.545376 18.375 0.767936 18.375 1V2.75H19.25C20.1783 2.75 21.0685 3.11875 21.7249 3.77513C22.3813 4.4315 22.75 5.32174 22.75 6.25V19.375C22.75 20.3033 22.3813 21.1935 21.7249 21.8499C21.0685 22.5063 20.1783 22.875 19.25 22.875H3.5C2.57174 22.875 1.6815 22.5063 1.02513 21.8499C0.368749 21.1935 0 20.3033 0 19.375V6.25C0 5.32174 0.368749 4.4315 1.02513 3.77513C1.6815 3.11875 2.57174 2.75 3.5 2.75H4.375V1C4.375 0.767936 4.46719 0.545376 4.63128 0.381281C4.79538 0.217187 5.01794 0.125 5.25 0.125ZM21 10.625C21 10.1609 20.8156 9.71575 20.4874 9.38756C20.1592 9.05937 19.7141 8.875 19.25 8.875H3.5C3.03587 8.875 2.59075 9.05937 2.26256 9.38756C1.93437 9.71575 1.75 10.1609 1.75 10.625V19.375C1.75 19.8391 1.93437 20.2842 2.26256 20.6124C2.59075 20.9406 3.03587 21.125 3.5 21.125H19.25C19.7141 21.125 20.1592 20.9406 20.4874 20.6124C20.8156 20.2842 21 19.8391 21 19.375V10.625Z" fill="white" />
                  </svg>
                  <label for="Date" class="text-white">05/06/23</label>
               </div>
            </div>
            <div class="flex flex-col  gap-[10px] py-[17px] px-[92px]  w-full h-[185px]">
               <label for="heading" class="text-white font-medium text-[24px]">คู่มือกำหนดคาบโฮมรูมและกิจกรรมอื่น</label>
               <p class="text-white">คู่มือกำหนดคาบโฮมรูมและกิจกรรมอื่น</p>
            </div>

         </div>
         <span class="p-[10px] flex text-[#817A7A] ml-[10px] font-[500]">วิชาที่เรียนวันนี้</span>
         <div class=" bg-white w-[50%] ml-[10px] mt-  rounded-[20px] mb-2">

            <!-- /* -------------------------------------------------------------------------- */
        /*                                  วิชาที่ 1                                 */
        /* -------------------------------------------------------------------------- */ -->
            <div class="flex   ml-4  p-2 gap-3">
               <div class="flex justify-center items-center w-[50px] h-[50px] bg-yellow-300 rounded-[50%]">
                  <label class="text-white font-medium text-lg">1</label>
               </div>
               <div class="flex flex-col">
                  <span class="text-[20px] font-medium">เพศศึกษา</span>
                  <div class="flex text-gray-400 text-[14px] ">
                     <label for="">รหัสวิชา</label>
                     <span class="ml-2">20001-0001</span>
                  </div>
               </div>

            </div>
            <div class="flex items-center flex-row p-[10px] ml-[20px] gap-2 ">
               <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M28.2799 21.1868C27.4316 23.1927 26.1049 24.9604 24.4157 26.3352C22.7265 27.71 20.7262 28.65 18.5898 29.0731C16.4534 29.4963 14.2458 29.3896 12.1601 28.7625C10.0744 28.1354 8.17405 27.0069 6.62525 25.4756C5.07644 23.9444 3.92631 22.0571 3.2754 19.9787C2.62449 17.9003 2.49264 15.6941 2.89135 13.5529C3.29007 11.4118 4.20721 9.40094 5.56261 7.69614C6.91801 5.99135 8.604 4.64453 10.6666 3.77344" stroke="#5D5D5D" stroke-width="1.41667" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M29.3333 15.9998C29.3333 14.2489 28.9885 12.5151 28.3184 10.8974C27.6483 9.27972 26.6662 7.80986 25.4281 6.57175C24.19 5.33363 22.7201 4.35151 21.1024 3.68144C19.4848 3.01138 17.751 2.6665 16 2.6665V15.9998H29.3333Z" stroke="#5D5D5D" stroke-width="1.41667" stroke-linecap="round" stroke-linejoin="round" />
               </svg>
               <span class="text-[18px] font-medium">คาบเรียนที่ 2<label class="font-[500]">

                  </label></span>

               <div class="flex flex-row items-start ml-4 text-[18px]  gap-1">


                  <span class="font-[500] text-green-400">09:30-10:30</span>


               </div>
            </div>

            <div class="ml-[20px] p-2">
               <div class="flex flex-col items-start">
                  <div class="flex flex-row">
                     <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#080808" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="10" r="3" />
                        <path d="M12 21.7C17.3 17 20 13 20 10a8 8 0 1 0-16 0c0 3 2.7 6.9 8 11.7z" />
                     </svg>
                     <span class="px-2 text-[18px] font-medium">อาคารเรียน 5 (545)<label class="font-[500]">
                  </div>
               </div>
            </div>
            <div class="ml-[30px] p-2 pb-10">
               <div class="flex flex-row items-center">
                  <div class="avatar">
                     <div class="w-10 h-10 rounded-full">
                        <img src="https://a-static.besthdwallpaper.com/newjeans-hanni-in-omg-album-shoot-wallpaper-2560x1600-108339_7.jpg" />
                     </div>
                  </div>
                  <span class="px-2 text-[16px] text-gray-600 font-bold">ฮานนิ รักชาติ</span>
               </div>
               <hr class="w-48 h-1 mx-auto mt-4   bg-gray-100 border-0 rounded  dark:bg-gray-700">
            </div>

            <!-- /* -------------------------------------------------------------------------- */
/*                                  วิชาที่ 2                                 */
/* -------------------------------------------------------------------------- */ -->
            <div class="flex   ml-4  p-2 gap-3">
               <div class="flex justify-center items-center w-[50px] h-[50px] bg-blue-500 rounded-[50%]">
                  <label class="text-white font-medium text-lg">2</label>
               </div>
               <div class="flex flex-col">
                  <span class="text-[20px] font-medium">โปรแกรมเคลื่อนที่</span>
                  <div class="flex text-gray-400 text-[14px] ">
                     <label for="">รหัสวิชา</label>
                     <span class="ml-2">20001-0005</span>
                  </div>
               </div>
            </div>
            <div class="flex items-center flex-row p-[10px] ml-[20px] gap-2 ">
               <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M28.2799 21.1868C27.4316 23.1927 26.1049 24.9604 24.4157 26.3352C22.7265 27.71 20.7262 28.65 18.5898 29.0731C16.4534 29.4963 14.2458 29.3896 12.1601 28.7625C10.0744 28.1354 8.17405 27.0069 6.62525 25.4756C5.07644 23.9444 3.92631 22.0571 3.2754 19.9787C2.62449 17.9003 2.49264 15.6941 2.89135 13.5529C3.29007 11.4118 4.20721 9.40094 5.56261 7.69614C6.91801 5.99135 8.604 4.64453 10.6666 3.77344" stroke="#5D5D5D" stroke-width="1.41667" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M29.3333 15.9998C29.3333 14.2489 28.9885 12.5151 28.3184 10.8974C27.6483 9.27972 26.6662 7.80986 25.4281 6.57175C24.19 5.33363 22.7201 4.35151 21.1024 3.68144C19.4848 3.01138 17.751 2.6665 16 2.6665V15.9998H29.3333Z" stroke="#5D5D5D" stroke-width="1.41667" stroke-linecap="round" stroke-linejoin="round" />
               </svg>
               <span class="text-[18px] font-medium">คาบเรียนที่ 3<label class="font-[500]">

                  </label></span>

               <div class="flex flex-row items-start ml-4 text-[18px]  gap-1">
                  <span class="font-[500] text-gray-500">13:30-15:30</span>
               </div>
            </div>
            <div class="ml-[20px] p-2">
               <div class="flex flex-col items-start">
                  <div class="flex flex-row">
                     <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#080808" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="10" r="3" />
                        <path d="M12 21.7C17.3 17 20 13 20 10a8 8 0 1 0-16 0c0 3 2.7 6.9 8 11.7z" />
                     </svg>
                     <span class="px-2 text-[18px] font-medium">อาคารเรียน 7 (515)<label class="font-[500]">

                  </div>
               </div>
            </div>
            <div class="ml-[30px] p-2 pb-10">
               <div class="flex flex-row items-center">
                  <div class="avatar">
                     <div class="w-10 h-10 rounded-full">
                        <img src="https://fbi.dek-d.com/27/0501/4005/132807202" />
                     </div>
                  </div>
                  <span class="px-2 text-[16px] text-gray-600 font-bold">วันพีช มีจริง</span>
               </div>
               <hr class="w-48 h-1 mx-auto mt-4   bg-gray-100 border-0 rounded  dark:bg-gray-700">
            </div>


         </div>



      </div>
   </div>