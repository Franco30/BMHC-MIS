$(function () {

            $.ajax({
                type: "GET",
                url: "action/fetch_medicine.php"
            }).done(function (medicine) {

                medicine.unshift({
                    medicine_id: "0",
                    medicine_name: "" 
                });

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
                        },
                    },

                    fields: [
                        {
                            name: "id",
                            type: "hidden",
                            css: 'hide'
                        },
                        {
                            name: "medicine",
                            title: "Medicine",
                            type: "select",
                            width: 100,
                            items: medicine,
                            valueField: "medicine_name",
                            textField: "medicine_name",
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
                            type: "control"
      }
    ]

                });

            });

});