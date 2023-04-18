KB.component('calendar', function (containerElement, options) {
    var modeMapping = {
        month: 'month',
        week: 'agendaWeek',
        day: 'agendaDay'
    };

    this.render = function () {
        var calendar = $(containerElement);
        var mode = 'month';
        if (window.location.hash) { // Check if hash contains mode
            var hashMode = window.location.hash.substr(1);
            mode = modeMapping[hashMode] || mode;
        }

        calendar.fullCalendar({
            locale: $("html").attr('lang'),
            editable: true,
            eventLimit: true,
            defaultView: mode,
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            eventDrop: function(event) {
                // console.log(event)
                var droppedEvent = {
                    "task_id": event.id,
                    "date_due": event,
                    "date_started": event,
                }

                function replacer(name, val) {
                    // This function takes the values in the "droppedEvent" above,
                    // as name: value, and returns the values for the ajax function
                    // below. 
                    // 
                    // There is some weirdness how this returns. If there is _just_ a 
                    // due date, then val.end will be null, and val.start will be the
                    // due date. Otherwise, if the start_date is specified, the val.end
                    // will be the due_date and val.start will be the date_started.
                    // 
                    // I don't necessarily like the switcheroo, but this seems to work.
                    // And while we could handle this logic above maybe, this is where
                    // I've gotten it to work first, so let's just leave it here until
                    // it starts to break something.
                    if ( (name.length == 0) || (name == 'task_id') ) {
                        return val;
                    } else {
                        if (name === 'date_due') {
                            if (val.end === null) {
                                // This is where we end up if there is no start_date set,
                                // but there is a due date
                                var dropped_date = new Date(val.start._d);
                            } else {
                                // This is where we end up if there is a start_date set,
                                // and we need to set the due date
                                var dropped_date = new Date(val.end._d);
                            }
                        } else {
                            if (val.end === null) {
                                // If we're working on date_started, but there is no "end" value,
                                // that value needs to be the due_date, so we just return null in
                                // that instance.
                                return null
                            }
                            var dropped_date = new Date(val.start._d);
                        }
                        // Set the dest date to something valid.
                        // console.log("Dropped Date for " + name + " : " + dropped_date)
                        destDate = new Date(dropped_date.getTime() + dropped_date.getTimezoneOffset() * 60 * 1000);
                        // console.log("dest Date for " + name + " : " + destDate)

                        //
                        // date_due building
                        //
                        var destMonth = ('0' + (destDate.getMonth() + 1)).slice(-2);
                        var destDay = ('0' + destDate.getDate()).slice(-2);
                        var destHours = ('0' + (destDate.getHours())).slice(-2);
                        var destMinutes = ('0' + destDate.getMinutes()).slice(-2);
                        var destDateTime = destDate.getFullYear() + '-' + destMonth + '-' + destDay + ' ' + destHours + ':' + destMinutes;
                        // console.log("Returning " + destDateTime + " for " + name)
                        return destDateTime
                        }
                }
                // console.log(JSON.stringify(droppedEvent, replacer))
                $.ajax({
                    cache: false,
                    url: options.saveUrl,
                    contentType: "application/json",
                    type: "POST",
                    processData: false,
                    data: JSON.stringify(droppedEvent, replacer)
                });
            },
            viewRender: function(view) {
                // Map view.name back and update location.hash
                for (var id in modeMapping) {
                    if (modeMapping[id] === view.name) { // Found
                        window.location.hash = id;
                        break;
                    }
                }
                var url = options.checkUrl;
                var params = {
                    "start": calendar.fullCalendar('getView').start.format(),
                    "end": calendar.fullCalendar('getView').end.format()
                };

                for (var key in params) {
                    url += "&" + key + "=" + params[key];
                }

                $.getJSON(url, function(events) {
                    calendar.fullCalendar('removeEvents');
                    calendar.fullCalendar('addEventSource', events);
                    calendar.fullCalendar('rerenderEvents');
                });
            }
        });
    };
});

KB.on('dom.ready', function () {
    function goToLink (selector) {
        if (! KB.modal.isOpen()) {
            var element = KB.find(selector);

            if (element !== null) {
                window.location = element.attr('href');
            }
        }
    }

    KB.onKey('v+c', function () {
        goToLink('a.view-calendar');
    });
});
