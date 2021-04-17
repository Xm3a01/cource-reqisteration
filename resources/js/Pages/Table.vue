<template>
  <table class="table">
    <thead class="text-primary">
      <tr>
        <th v-for="title in titles" :key="title">{{title}}</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <tr v-for="(course , index) in courses" :key="index">
            {{course.data[0].name}}
            <!-- <td >{{course.name}}</td>
            <td >{{course.h_week}}</td>
            <td >{{course.monthes}}</td>
            <td >{{course.feeses}}</td>
            <td >{{course.seats}}</td>
            <td >{{course.description}}</td> -->
            <td ></td>
        </tr>
    </tbody>
  </table>
</template>

<script>
export default {
  props: ["courses", "titles"],

  data() {
    return {};
  },
};
</script>