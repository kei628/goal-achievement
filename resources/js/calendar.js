import '@fullcalendar/core/vdom'; // for Vite
import { Calendar } from "@fullcalendar/core";
import interactionPlugin from "@fullcalendar/interaction";
import dayGridPlugin from "@fullcalendar/daygrid";
import axios from 'axios';

var calendarEl = document.getElementById("calendar");

let calendar = new Calendar(calendarEl, {
    plugins: [interactionPlugin,dayGridPlugin],
    initialView: "dayGridMonth",
    headerToolbar: {
        left: "prev,next today",
        center: "title",
        right: "",
    },
    selectable: true,
    select: function (info){
        document.getElementById("start_date").value = info.startStr;
        console.log(info);
        document.getElementById("end_date").value = info.endStr;
        MicroModal.show('modal-1');
        
        //   if (eventName) {
        //          // Laravelの登録処理の呼び出し
        //          axios
        //              .post("/calendars", {
        //                  start_date: info.start.valueOf(),
        //                  end_date: info.end.valueOf(),
        //                  event_name: eventName,
        //              })
        //              .then(() => {
        //                  // イベントの追加
        //                  calendar.addEvent({
        //                      title: eventName,
        //                      start: info.start,
        //                      end: info.end,
        //                      allDay: true,
        //                  });
        //              })
        //              .catch(() => {
        //                  // バリデーションエラーなど
        //                  alert("登録に失敗しました");
        //              });
        //      }

    },
    events: function (info, successCallback, failureCallback) {
        // Laravelのイベント取得処理の呼び出し
        axios
            .post("/schedule-get", {
                start_date: info.start.valueOf(),
                end_date: info.end.valueOf(),
            })
            
            .then((response) => {
                // 追加したイベントを削除
                calendar.removeAllEvents();
                // カレンダーに読み込み
                console.log(response.data);
                successCallback(response.data);
                
            })
            .catch(() => {
                // バリデーションエラーなど
                alert("登録に失敗しました");
            });
          
            
    },
      eventClick: function(info) {
          window.location.href = `/calendars/${info.event.id}`;
   }
  

});
calendar.render();