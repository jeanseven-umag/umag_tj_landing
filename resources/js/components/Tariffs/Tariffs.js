import { TarifBanner } from "./TarifBanner/TarifBanner";
import { TarifDescription } from "./TarifDescription/TarifDescription";
import { TarifInfo } from "./TarifInfo/TarifInfo";
import { TarifPackages } from "./TarifPackages/TarifPackages";

export const Tariffs = () => {
  return (
    <div className="tariffs-block">
      <h2 className="tariffs-caption">Тарифҳо</h2>
      <TarifBanner />
      <TarifPackages />
      <TarifDescription />
      <TarifInfo />
    </div>
  );
};
