import React from 'react';
import { BrowserRouter as Router, Route } from 'react-router-dom';
import Navbar from './components/Navbar';
import Home from './pages/Home.js';
import Register from './components/Register.js';
import Login from './components/Login';
import AdminDashboard from './components/AdminDashboard';
import DoctorDashboard from './components/DoctorDashboard';
import PatientDashboard from './components/PatientDashboard';
import ManagePatients from './pages/ManagePatients';
import ManageDoctors from './pages/ManageDoctors';
import BookAppointment from './pages/BookAppointment';
import ViewAppointments from './pages/ViewAppointment.js';

const App = () => {
  return (
    <Router>
      <div>
        <Navbar />
        <Route>
          <Route path="/" element={<Home />} />
          <Route path="/login" element={<Login />} />
          <Route path="/register" element={<Register />} />
          <Route path="/admin-dashboard" element={<AdminDashboard />} />
          <Route path="/doctor-dashboard" element={<DoctorDashboard />} />
          <Route path="/patient-dashboard" element={<PatientDashboard />} />
          <Route path="/book-appointment" element={<BookAppointment />} />
          <Route path="/manage-doctors" element={<ManageDoctors />} />
          <Route path="/manage-patients" element={<ManagePatients />} />
          <Route path="/view-appointment" element={<ViewAppointments />} />
        </Route>
      </div>
    </Router>
  );
};

export default App;
