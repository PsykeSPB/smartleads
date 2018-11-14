const persons = [
  { id: 12, date: "07/02/2016", name: "Иванов Александр", sum: 600.12 },
  { id: 7, date: "09/13/2017", name: "Семенов Николай", sum: 7200.6 },
  { id: 5, date: "05/20/2015", name: "Антонов Алексей", sum: 1248.16 },
  { id: 18, date: "12/24/2016", name: "Алексеев Игорь", sum: 20.65 },
  { id: 3, date: "08/17/2015", name: "Потапов Серей", sum: 12720.0 },
  { id: 1, date: "01/20/2015", name: "Николаев Иван", sum: 121.16 },
  { id: 21, date: "02/25/2017", name: "Петров Алексей", sum: 200.5 },
  { id: 16, date: "09/17/2016", name: "Морозов Сергей", sum: 100.15 },
  { id: 9, date: "03/25/2015", name: "Иванов Константин", sum: 600.25 }
];

new Vue({
  el: "#app",
  data: {
    persons: persons,
    sorted: "none"
  },
  methods: {
    sortId: function() {
      if (this.sorted !== "id>") {
        this.persons.sort((a, b) => a.id - b.id);
        this.sorted = "id>";
      } else {
        this.persons.sort((a, b) => b.id - a.id);
        this.sorted = "id<";
      }
    },
    sortDate: function() {
      if (this.sorted !== "date>") {
        this.persons.sort((a, b) => new Date(a.date) - new Date(b.date));
        this.sorted = "date>";
      } else {
        this.persons.sort((a, b) => new Date(b.date) - new Date(a.date));
        this.sorted = "date<";
      }
    },
    sortText: function() {
      if (this.sorted !== "name>") {
        this.persons.sort((a, b) => a.name.localeCompare(b.name));
        this.sorted = "name>";
      } else {
        this.persons.sort((a, b) => b.name.localeCompare(a.name));
        this.sorted = "name<";
      }
    },
    sortSum: function() {
      if (this.sorted !== "sum>") {
        this.persons.sort((a, b) => a.sum - b.sum);
        this.sorted = "sum>";
      } else {
        this.persons.sort((a, b) => b.sum - a.sum);
        this.sorted = "sum<";
      }
    }
  }
});
