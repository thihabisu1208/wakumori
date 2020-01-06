import VueRouter from "vue-router";
import TeacherDashboard from "./teacher/dashboard";

const routes = [
    {
        path: "/teacherDashboard",
        component: TeacherDashboard,
        name: "teacherdashboard"
    }
];

const router = new VueRouter({
    mode: "history",
    routes
});

export default router;