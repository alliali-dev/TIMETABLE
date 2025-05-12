import './bootstrap';
import { createApp } from 'vue';
import AppLayout from '../views/layouts/App.vue';
import Login from '../views/auth/components/login.vue';
import Dashboard from '../views/auth/components/dashboard.vue';


const login = createApp({ Login });
login.component("login-component", Login);
login.mount("#login");
const home = createApp({AppLayout});
home.component("home-component", AppLayout);
// home.mount("#home");
const dashboardApp = createApp({ Dashboard });
dashboardApp.component("dashboard-component", Dashboard);
dashboardApp.mount("#dashboard");