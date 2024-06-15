import React from 'react';
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';
import { Navbar } from './components/Navbar';
import Home from './pages/Home';
import Register from './components/Register';
import Login from './components/Login';
import AdminDashboard from './components/AdminDashboard';
import DoctorDashboard from './components/DoctorDashboard';
import PatientDashboard from './components/PatientDashboard';
import ManagePatients from './pages/ManagePatients';
import ManageDoctors from './pages/ManageDoctors';
import BookAppointment from './pages/BookAppointment';
import ViewAppointments from './pages/ViewAppointment';

const App = () => {
  return (
    <Router>
      <Navbar />
      <Routes>
        <Route path="/pages/Home" element={<Home />} />
        <Route path="/components/Register" element={<Register />} />
        <Route path="/components/Login" element={<Login />} />
        <Route path="/components/AdminDashboard" element={<AdminDashboard />} />
        <Route path="/components/DoctorDashboard" element={<DoctorDashboard />} />
        <Route path="/components/PatientDashboard" element={<PatientDashboard />} />
        <Route path="/pages/ManagePatients" element={<ManagePatients />} />
        <Route path="/pages/ManageDoctors" element={<ManageDoctors />} />
        <Route path="/pages/BookAppointment" element={<BookAppointment />} />
        <Route path="/pages/ViewAppointments" element={<ViewAppointments />} />
      </Routes>
    </Router>
  );
};

export default App;
