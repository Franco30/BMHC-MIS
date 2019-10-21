$(function () {

    "use strict";
    $.ajax({
        type: "GET",
        url: "action/fetch_medicine.php"
    }).done(function (medicine) {

        medicine.unshift({
            medicine_id: "0",
            medicine_name: ""
        });

        var SolRiaDateTimeField = function (config) {
            jsGrid.Field.call(this, config);
        };
        SolRiaDateTimeField.prototype = new jsGrid.Field({
            sorter: function (date1, date2) {
                return new Date(date1) - new Date(date2);
            },

            itemTemplate: function (value) {
                if (value === null) {
                    return '';
                } else {
                    return moment(value).format('L LT');
                }
            },

            insertTemplate: function (value) {
                console.log('on init insert template ' + moment());
                this._insertPicker = $('<input>').datetimepicker({
                    format: 'L LT',
                    defaultDate: moment(),
                    widgetPositioning: {
                        horizontal: 'auto',
                        vertical: 'bottom'
                    }
                });
                console.log('insert template created');
                this._insertPicker.data('DateTimePicker').date(moment());
                return this._insertPicker;
            },

            editTemplate: function (value) {
                this._editPicker = $('<input>').datetimepicker({
                    format: 'L LT',
                    widgetPositioning: {
                        horizontal: 'auto',
                        vertical: 'bottom'
                    }
                });

                if (value !== null) {
//                    this._editPicker.data('DateTimePicker').defaultDate(moment(value));
                    this._editPicker.data('DateTimePicker').date(moment(value));
                }
                return this._editPicker;
            },

            insertValue: function () {
                console.log('on get insert value');
                var insertValue = this._insertPicker.data('DateTimePicker').date(moment());
                if (typeof insertDate !== 'undefined' && insertDate !== null) {
                    return insertDate.format('L LT');
                } else {
                    return null;
                }
            },

            editValue: function () {
                var editValue = this._editPicker.data('DateTimePicker').date();
                if (typeof editValue !== 'undefined' && editValue !== null) {
                    return editValue.format('L LT');
                } else {
                    return null;
                }
            }

        });
        jsGrid.fields.solRiaDateTimeField = SolRiaDateTimeField;

        $('#grid_table').jsGrid({

            width: "100%",
            height: "460px",

            filtering: true,
            inserting: true,
            editing: true,
            sorting: true,
            paging: true,
            autoload: true,
            pageSize: 10,
            pageButtonCount: 5,
            deleteConfirm: "Do you really want to delete data?",

            controller: {
                loadData: function (filter) {
                    return $.ajax({
                        type: "GET",
                        url: "action/fetch_data.php",
                        data: filter
                    });
                },
                insertItem: function (item) {
                    return $.ajax({
                        type: "POST",
                        url: "action/fetch_data.php",
                        data: item
                    });
                },
                updateItem: function (item) {
                    return $.ajax({
                        type: "PUT",
                        url: "action/fetch_data.php",
                        data: item
                    });
                },
                deleteItem: function (item) {
                    return $.ajax({
                        type: "DELETE",
                        url: "action/fetch_data.php",
                        data: item
                    });
                }
            },

            fields: [
                {
                    name: "id",
                    type: "hidden",
                    css: 'hide'
                },
                {
                    name: "date_time",
                    title: "Date and Time",
                    type: "solRiaDateTimeField",
                    width: 100
                },
                {
                    name: "medicine",
                    title: "Medicine",
                    type: "select",
                    width: 100,
                    items: medicine,
                    valueField: "medicine_name",
                    textField: "medicine_name"
                },
                {
                    name: "breakfast",
                    type: "text",
                    width: 50,
                    validate: "required"
                },
                {
                    name: "lunch",
                    type: "text",
                    width: 50,
                    validate: "required"
                },
                {
                    name: "dinner",
                    type: "text",
                    width: 50,
                    validate: function (value) {
                        if (value > 0) {
                            return true;
                        }
                    }
                },
                {
                    type: "control",
                    modeSwitchButton: true,
                    editButton: true
                }
                ]

        });

    });

});
