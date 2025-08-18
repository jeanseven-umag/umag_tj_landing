import { Flex, Grid } from "@mantine/core";

export const TarifDescription = () => {
  return (
    <div className="bg-tariffs-description">
      <Flex direction="column" className="tariffs-description-block">
        <h3 className="tariffs-description-caption">
          Первичная установка Программного Обеспечения UMAG
        </h3>
        <Grid align="flex-start">
          <Grid.Col span={9}>
            <p className="tariffs-description-text">
              При первичном подключении взимается единоразовый платеж в размере
              30 000 тенге за установку оборудования с программным обеспечением
              для одной торговой точки. Далее вы оплачиваете только ежемесячные
              платежи согласно вашему тарифу
            </p>
          </Grid.Col>
          <Grid.Col span={3}>
            <Flex justify="center">
              <button className="tariffs-description-btn">
                Узнать подробнее
              </button>
            </Flex>
          </Grid.Col>
        </Grid>
      </Flex>
    </div>
  );
};
