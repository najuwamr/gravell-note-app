import React from "react";
import ReactDOM from "react-dom/client";
import "../css/app.css";
import Heatmap from "./components/CalendarHeatmap";

// Ambil stats dari Blade ke props
const el = document.getElementById("heatmap");
const stats = JSON.parse(el.dataset.stats);

ReactDOM.createRoot(el).render(
    <React.StrictMode>
        <Heatmap stats={stats} />
    </React.StrictMode>
);
