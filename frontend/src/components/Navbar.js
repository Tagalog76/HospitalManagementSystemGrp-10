import { Link } from 'react-router-dom';

export const Navbar = () => {
  return (
    <nav>
      <ul>
        <li><Link to="/pages/Home">Home</Link></li>
        <li><Link to="/components/Register">Register</Link></li>
        <li><Link to="/components/Login">Login</Link></li>
        <li><Link to="/components/PatientDashboard">PatientDashboard</Link></li>
        <li><Link to="/components/DoctorDashboard">DoctorDashboard</Link></li>
      </ul>
    </nav>
  );
};


