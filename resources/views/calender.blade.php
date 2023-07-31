    <section id="content">
        <!-- InstanceBeginEditable name="content" -->
        <!--banner區塊 -->

        <!--/Path/-->


        <!--/下方內容/-->
        <div class="whitebox02 whitebox03">
            <div class="inbox">
                <div class="formbox formborder">

                    <!--// 日曆 //-->
                    <form class="ajax" loadong="true" id="form-sheduleEdit" action="{{ URL::to('member/get_schedule') }}"
                        method="get">
                        <input type="hidden" name="schedule_id" value="0">
                        <div id="calendar" class="cal01"></div>
                    </form>

                    <form class="ajax" id="form-del" action="{{ URL::to('member/schedule') }}" method="delete">
                        @csrf
                        <input type="hidden" name="schedule_id" value="0">
                    </form>

                    <script>
                        var schedull_calendar;
                        //建立諮詢時間

                        var booked;

                        function setTimeFromTo() {

                            if (!$('#time_select').val()) return;
                            var t = $('#time_select').val().split('~');
                            $('#form-schedule input[name=time_from]').val(t[0]);
                            $('#form-schedule input[name=time_to]').val(t[1]);


                        }

                        function addDate(val) {
                            var additem_classname =
                                '<span><input type="date" class="tf" value="' + val +
                                '" name="dates[]" placeholder="請輸入.."><a href="javascript:;"><i class="icon i_del" title="刪除"></i></a></span>';
                            $('.insertArea').prepend(additem_classname).ready(function() {
                                //刪除日期
                                $('.insertArea a').click(function() {
                                    $(this).parents().closest('span').remove();
                                });
                            });


                        }

                        function scheduleCallBack(data) {

                            if (data.result) {
                                Swal.fire({
                                    customClass: 'popout',
                                    title: '系統訊息',
                                    text: data.msg,
                                    reverseButtons: true,
                                    showCancelButton: false,
                                    confirmButtonText: '確認'
                                })
                                schedull_calendar.refetchEvents()
                                schedull_calendar.render();
                            }
                        }

                        function delCallBack(data) {
                            scheduleCallBack(data)
                        }


                        function getSchedule(id) {
                            $('#form-sheduleEdit [name=schedule_id]').val(id);
                            $('#form-schedule').LoadingOverlay('show');
                            autoAjax('form-sheduleEdit');
                        }

                        function sheduleEditCallBack(data) {
                            if (data.result) {

                                setData(data);

                                $('#form-schedule').LoadingOverlay('hide', true);

                            }
                        }

                        function setData(data) {
                            var mine = $('#form-schedule [name=datetype][value=' + data.schedule.type + ']')
                            mine.prop('checked', true).trigger('click');
                            var ravalue = mine.attr('data-value');
                            $('div[data-id^=datetype]').stop(true, true).hide();
                            $('div[data-id^=datetype' + ravalue + ']').stop(true, true).show();
                            switch (data.schedule.type) {
                                case 1:
                                    $('#form-schedule [name=date]').val(data.schedule.date_str.date);

                                    break;
                                case 2:
                                    for (key in data.schedule.date_str.dates) {
                                        if (key == 0) $('#dates').val(data.schedule.date_str.dates[key]);
                                        else addDate(data.schedule.date_str.dates[key]);
                                    }
                                    break;
                                case 3:
                                    $('#form-schedule [name=date_from]').val(data.schedule.from);
                                    $('#form-schedule [name=date_to]').val(data.schedule.to);

                                    break;
                                case 4:
                                    $('#form-schedule [name=date_w_from]').val(data.schedule.from);
                                    $('#form-schedule [name=date_w_to]').val(data.schedule.to);
                                    for (key in data.schedule.date_str.weeks) {
                                        $('#form-schedule .weeks[value=' + data.schedule.date_str.weeks[key] + ']').prop(
                                            'checked', true);
                                    }
                                    break;
                            }
                            $('#form-schedule [name=time][value=' + data.schedule.date_str.time + ']').prop('checked', true);
                            $('#form-schedule [name=console_type][value=' + data.schedule.date_str.console_type + ']').prop('checked',
                                true);



                            $('#form-del input[name=schedule_id]').val(data.schedule.id);

                            $('.del-btn').unbind().on('click', function() {
                                Swal.fire({
                                    customClass: 'popout',
                                    title: '刪除諮詢時間',
                                    text: '你確定要刪除？',
                                    reverseButtons: true,
                                    showCancelButton: true,
                                    confirmButtonText: '確認',
                                    cancelButtonText: '取消',

                                }).then(function(result) {


                                    if (result.value) autoAjax('form-del');
                                    else getSchedule($('#form-del input[name=schedule_id]').val())
                                })
                            })
                        }

                        var froms = [];

                        function setConsoleData(data) {

                            booked = data.schedule.booked;
                            switch (data.schedule.type) {
                                case 1:
                                    $('#form-schedule [name=date]').append('<option value="' + data.schedule.date_str.date + '">' + data
                                        .schedule.date_str.date + '</option>');

                                    break;
                                case 2:
                                    for (key in data.schedule.date_str.dates) {
                                        $('#form-schedule [name=date]').append('<option value="' + data.schedule.date_str.dates[key] +
                                            '">' + data.schedule.date_str.dates[key] + '</option>');
                                    }
                                    break;
                                case 3:
                                    for (key in data.dates) {
                                        $('#form-schedule [name=date]').append('<option value="' + data.dates[key] +
                                            '">' + data.dates[key] + '</option>');
                                    }
                                    break;
                                case 4:
                                    for (key in data.dates) {
                                        $('#form-schedule [name=date]').append('<option value="' + data.dates[key] +
                                            '">' + data.dates[key] + '</option>');
                                    }
                                    break;
                            }

                            if (data.schedule.date_str.console_type == 'online') {
                                var text = '線上';
                            } else text = '實體';

                            $('#console_type').html(text);;

                            $('#console_type_text').html(text);;

                            if (data.schedule.date_str.time == 'AM') text = '上午';
                            else text = '下午';

                            $('#time_text').html(text);;

                            $('#form-schedule [name=console_type]').val(data.schedule.date_str.console_type);
                            $('#form-schedule [name=time]').val(data.schedule.date_str.time);

                            $('#form-schedule [name=time_from]').val(data.schedule.date_str.from);
                            $('#form-schedule [name=time_to]').val(data.schedule.date_str.to);
                            var mins = ['00', '15', '30', '45'];

                            var hours = [];
                            for (var i = parseInt(data.schedule.date_str.from.substr(0, 2)); i <= parseInt(data.schedule.date_str.to
                                    .substr(
                                        0, 2)); i++) {
                                hours.push(i.toString().padStart(2, "0"));
                            }

                            start = false;
                            var i = 0;
                            var options = '';
                            var times = [];
                            froms = [];
                            tos = [];

                            for (key in hours) {
                                for (each in mins) {

                                    if (!start && data.schedule.date_str.from.substr(3, 2) != mins[each]) continue;


                                    if (data.schedule.date_str.to.substr(0, 2) == hours[key]) {
                                        // 最後一的時段 的最後分鐘
                                        if (parseInt(data.schedule.date_str.to.substr(3, 2)) < parseInt(mins[each])) break;
                                    }


                                    start = true;
                                    to_hour = (parseInt(hours[key]) + 1).toString().padStart(2, "0");
                                    times.push(hours[key] + ':' + mins[each] + "~" + to_hour + ':' + mins[each]);
                                    froms.push(hours[key] + '_' + mins[each]);
                                    tos.push(to_hour + '_' + mins[each]);


                                }
                            }

                            times = times.slice(0, -4);
                            for (var i in times) {
                                options += '<option  class="from-options from_' + froms[i] + ' to_' + tos[i] +
                                    '" data-hide="0" id="" data-id=' + i +
                                    ' value="' + times[
                                        i] +
                                    '">' +
                                    times[i] + '</option>';
                            }

                            $('#time_select').html(options);

                            $('#form-schedule input[name=schedule_id]').val(data.schedule.id);
                            $('#form-schedule [name=date]').val(selectedDate);
                            hideBooked();
                            setTimeFromTo();


                        }

                        function hideBooked() {
                            date = $('#form-schedule [name=date]').val();
                            $('.from-options').show();
                            $('.from-options').data('hide', 0);

                            if (booked && booked[date]) {
                                for (key in booked[date]) {
                                    from_t = booked[date][key]['from'].split(':');

                                    booked_t = from_t[0].toString().padStart(2, '0') + ':' + from_t[1].toString().padStart(2, '0');
                                    //隱藏已訂位
                                    $('.from_' + booked_t.replace(':', '_')).hide();
                                    $('.from_' + booked_t.replace(':', '_')).data('hide', 1);


                                    var i = 0;
                                    from_t[1] = parseInt(from_t[1]) + 15;
                                    if (from_t[1] >= 60) {
                                        from_t[1] -= 60;
                                        from_t[0] = parseInt(from_t[0]) + 1;
                                    }

                                    now_t = from_t[0].toString().padStart(2, '0') + ':' + from_t[1].toString().padStart(2, '0');
                                    for (var now_t; now_t != booked[date][key]['to'];) {


                                        $('.from_' + now_t.replace(':', '_')).hide();
                                        $('.from_' + now_t.replace(':', '_')).data('hide', 1);

                                        $('.to_' + now_t.replace(':', '_')).hide();
                                        $('.to_' + now_t.replace(':', '_')).data('hide', 1);
                                        from_t[1] = parseInt(from_t[1]) + 15;
                                        if (from_t[1] >= 60) {
                                            from_t[1] -= 60;
                                            from_t[0] = parseInt(from_t[0]) + 1;
                                        }

                                        now_t = from_t[0].toString().padStart(2, '0') + ':' + from_t[1].toString().padStart(2, '0');

                                        i++;
                                        if (i > 20) break;
                                    }





                                }
                            }
                            $('#time_select').val("");
                            $(".from-options").each(function() {
                                if ($(this).data("hide") == 0) {
                                    $('#time_select').val($(this).val());
                                }
                            })


                            ;


                        }


                        function timeSelector() {



                            var hours = ['00', '01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'];
                            var mins = ['00', '30'];
                            options = '';
                            to_options = '';

                            i = 0;
                            for (key in hours) {

                                for (each in mins) {
                                    if (hours[key] == 12 && mins[each] == '30') continue;
                                    t = hours[key] + ':' + mins[each]
                                    options += '<option  class="from-options" id="from_' + i + '" data-id=' + i + ' value="' + t +
                                        '">' +
                                        t + '</option>';
                                    to_options += '<option class="to-options" id="to_' + i + '" data-id=' + i + ' value="' + t + '">' +
                                        t +
                                        '</option>';

                                    i++;
                                }


                            }



                            $('#time_from').html(options);
                            $('#time_to').html(to_options);
                            $('#from_' + (i - 1)).hide();


                            $('#time_from').on('change', function() {
                                $('.to-options').show();
                                for (var i = 0; i <= $("#time_from option:selected").data('id'); i++) {
                                    $('#to_' + i).hide();
                                    $('#time_to').val($('#to_' + (i + 1)).text());

                                }

                                $('input[name=time_from]').val($("#time_from option:selected").text())
                                $('input[name=time_to]').val($("#time_to option:selected").text())

                            })

                            $('#time_to').on('change', function() {

                                $('input[name=time_to]').val($("#time_to option:selected").text())

                            })
                            $('#time_from').val('08:00');
                            $('#time_to').val('12:00');
                            $('input[name=time]').on('click', function() {

                                if ($(this).val() == 'AM') {

                                    $('#time_from').val('08:00');
                                    $('#time_to').val('12:00');

                                } else {

                                    $('#time_from').val('01:00');
                                    $('#time_to').val('05:00');


                                }
                            })



                        }

                        //日曆
                        var selectedDate = '';
                        $(function() {
                            var calendarName = document.getElementById('calendar');
                            var DAY_NAMES = ['日', '一', '二', '三', '四', '五', '六', ];
                            schedull_calendar = new FullCalendar.Calendar(calendarName, {
                                locale: 'zh-tw',
                                dayHeaderContent: function(arg) {
                                    return DAY_NAMES[arg.date.getDay()]
                                },
                                dayCellContent: function(arg) {
                                    return [arg.date.getDate()]
                                },
                                headerToolbar: {
                                    left: 'prev',
                                    center: 'title',
                                    right: 'next,today'
                                },
                                buttonText: {
                                    dayGridMonth: '月',
                                    timeGridWeek: '週',
                                    timeGridDay: '日',
                                    today: '今天',
                                },
                                selectable: true,
                                selectMirror: true,

                                eventClick: function(info) {
                                    var x = info.jsEvent.pageX;
                                    var y = info.jsEvent.pageY;

                                    $('.fc-daygrid-day-frame').each(function() {
                                        var t = $(this).offset().top;
                                        var b = $(this).offset().top + $(this).height();
                                        var l = $(this).offset().left;
                                        var r = $(this).offset().left + $(this).width();

                                        if (x >= l && x <= r &&
                                            y >= t && y <= b
                                        ) {
                                            selectedDate = $(this).parent().data('date');
                                        }

                                    })


                                    var eventObj = info.event;
                                    if (eventObj.url) {
                                        getSchedule(eventObj.id)

                                    }
                                    info.jsEvent.preventDefault();
                                },
                                events: {
                                    url: '{{ admin_url('get_calender') }}',
                                    error: function() {
                                        $('#script-warning').show();
                                    },
                                    success: function() {

                                    }
                                },
                                loading: function(bool) {
                                    $('#loading').toggle(bool);
                                }

                            });
                            schedull_calendar.render();
                        });
                    </script>

                </div>
            </div>
        </div>





        <!-- InstanceEndEditable -->

    </section>

    <style>
        .whitebox02 {
            background-color: white;
        }
    </style>
