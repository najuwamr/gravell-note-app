import React, { useEffect, useState } from "react";
import CalendarHeatmap from "react-calendar-heatmap";
import { Tooltip } from "react-tooltip"; // ✅ fixed import
import "react-calendar-heatmap/dist/styles.css";
import "react-tooltip/dist/react-tooltip.css";

const Heatmap = ({ stats }) => {
  const [values, setValues] = useState([]);

  useEffect(() => {
    const transformed = Object.entries(stats).map(([date, count]) => ({
      date,
      count,
    }));
    setValues(transformed);
  }, [stats]);

  return (
    <div className="w-full overflow-x-auto">
      <CalendarHeatmap
        startDate={new Date(new Date().setFullYear(new Date().getFullYear() - 1))}
        endDate={new Date()}
        values={values}
        classForValue={(value) => {
          if (!value || value.count === 0) return "color-empty";
          if (value.count < 2) return "color-scale-1";
          if (value.count < 5) return "color-scale-2";
          return "color-scale-3";
        }}
        showWeekdayLabels={true}
        tooltipDataAttrs={(value) =>
          value.date ? { "data-tooltip-id": "heatmap-tooltip", "data-tooltip-content": `${value.date}: ${value.count} catatan` } : {}
        }
      />
      <Tooltip id="heatmap-tooltip" className="text-xs px-2 py-1 bg-viridian-600 rounded" />
    </div>
  );
};

export default Heatmap;
