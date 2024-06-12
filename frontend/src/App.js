import React from 'react';
import { BrowserRouter as Router, Route, Switch } from 'react-router-dom';
import Navbar from './components/Navbar';
import Home from './pages/Home.js/index.js';
import Register from './components/Register.js';
import Login from './components/Login';
import AdminDashboard from './components/AdminDashboard';
import DoctorDashboard from './components/DoctorDashboard';
import PatientDashboard from './components/PatientDashboard';
import ManagePatients from './pages/ManagePatients';
import ManageDoctors from './pages/ManageDoctors';
import BookAppointment from './pages/BookAppointment';
import ViewAppointments from './pages/ViewAppointments';

const App = () => {
  return (
    <Router>
      <Navbar />
      <Switch>
        <Route path="/" exact component={Home} />
        <Route path="/register" component={Register} />
        <Route path="/login" component={Login} />
        <Route path="/admin" exact component={AdminDashboard} />
        <Route path="/doctor" exact component={DoctorDashboard} />
        <Route path="/patient" exact component={PatientDashboard} />
        <Route path="/admin/manage-patients" component={ManagePatients} />
        <Route path="/admin/manage-doctors" component={ManageDoctors} />
        <Route path="/doctor/view-appointments" component={ViewAppointments} />
        <Route path="/patient/book-appointment" component={BookAppointment} />
        <Route path="/patient/view-appointments" component={ViewAppointments} />
      </Switch>
    </Router>
  );
};

export default App;
