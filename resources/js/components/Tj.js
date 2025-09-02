import "./css/Uz.css";
import { useEffect, useState } from "react";
import { TarifInfo } from "./TarifInfo";
import { TarifStructure } from "./TarifStructure";
import { TarifDignity } from "./TarifDignity";

const tariffs = [
  {
    id: "1",
    months: 3,
    currency_tj: "сомонӣ",
    currency_ru: "сомони",
    cena: 56000,
    kassa: 46000,
    tt: 92000,
    perMonth: 194000,
    perPeriod: 582000,
    discount: null,
    install: 795000,
  },
  {
    id: "2",
    months: 6,
    currency_tj: "сомонӣ",
    currency_ru: "сомони",
    cena: 34000,
    kassa: 46000,
    tt: 92000,
    perMonth: 172000,
    perPeriod: 1032000,
    discount: "~10%",
    install: 795000,
  },
  {
    id: "3",
    months: 12,
    currency_tj: "сомонӣ",
    currency_ru: "сомони",
    cena: 17000,
    kassa: 46000,
    tt: 92000,
    perMonth: 155000,
    perPeriod: 1860000,
    discount: "~20%",
    install: 795000,
  },
];

export const Tj = () => {
  const [chosenTarif, setChosenTarif] = useState();

  useEffect(() => {
    const copy = [...tariffs];
    setChosenTarif(copy[0]);
  }, []);

  return (
    <div className="tarif-main">
      {chosenTarif && (
        <TarifInfo
          tariffs={tariffs}
          chosenTarif={chosenTarif}
          setChosenTarif={setChosenTarif}
        />
      )}
      <TarifStructure />
      <TarifDignity />
    </div>
  );
};
