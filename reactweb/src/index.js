import React from 'react';
// import ReactDOM from 'react-dom/client';
// import { BrowserRouter, Routes, Route } from "react-router-dom";
import './index.css';
import Login from './components/Login';
import Register from './components/Register';
import EditAccount from './components/EditAccount';
import AdminPageAnnonce from './components/AdminPageAnnonce';
import AdminPageEntreprise from './components/AdminPageEntreprise';
import AdminPageUtilisateur from './components/AdminPageUtilisateur';
import LoginAdmin from './components/LoginAdmin';
import ReactDOM from "react-dom/client";
import { BrowserRouter, Routes, Route } from "react-router-dom";
import Home from "./Pages/Home";
import './index.css'




export default function App() {
  return (
    <BrowserRouter>
      <Routes>
        <Route path="/home" element={<Home />}></Route>
        <Route path="*" element={<Home />}></Route>
        <Route path="/login" element={<Login />}></Route>
        <Route path='/register' element={<Register />}></Route>
        <Route path='/editaccount' element={<EditAccount />}></Route>
        <Route path='/adminAnnonce' element={<AdminPageAnnonce />}></Route>
        <Route path='/adminEntreprise' element={<AdminPageEntreprise />}></Route>
        <Route path='/adminUtilisateur' element={<AdminPageUtilisateur />}></Route>
        <Route path='/loginAdmin' element={<LoginAdmin />}></Route>
      </Routes>
    </BrowserRouter >
  );
};

const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(<App />);



// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
root.render(<App />);
