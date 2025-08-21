import { Card, Flex, Grid, SegmentedControl, Text } from "@mantine/core";
import { TarifCompareModal } from "./TarifCompareModal/TarifCompareModal";
import { useDisclosure } from "@mantine/hooks";
import { useState } from "react";

export const TarifPackages = () => {
  const [opened, { close, open }] = useDisclosure(false);

  const handleTariff = () => {
    window.location.href = "https://umag-main.kz/page57741021.html";
  };
  const [month, setMonth] = useState(6);

  const getSum = () => {
    switch (month) {
      case 1:
        return "19.900 ₸";
      case 3:
        return "15.900 ₸";
      case 6:
        return "14.900 ₸";
      default:
        return "19.900 ₸";
    }
  };

  return (
    <Grid gutter={50}>
      <Grid.Col span={6} py={0} />
      <Grid.Col span={6} py={0}>
        <SegmentedControl
          w="100%"
          styles={{
            label: {
              padding: "5px 0",
              color: "#a6a6a6",
              fontSize: "14px",
              lineHeight: "24px",
              fontWeight: 600,
              marginBottom: 0,
            },
            root: {
              fontFamily: 'Montserrat',
              borderRadius: "50px",
              marginTop: "10px",
            },
            controlActive: {
              backgroundColor: "#fff",
              borderRadius: "50px",
            },
            indicator: { borderRadius: "50px" },
          }}
          value={month}
          data={[
            { label: "1 моҳ", value: 1 },
            { label: "3 моҳ", value: 3 },
            { label: "6 моҳ", value: 6 },
          ]}
          onChange={setMonth}
        />
      </Grid.Col>
      <Grid.Col span={6}>
        <Card
          shadow="sm"
          padding="lg"
          radius={50}
          withBorder
          className="tariffs-card"
        >
          <Card.Section p={40}>
            <Flex direction="column" justify="space-between">
              <Flex direction="column" h="120px" justify="space-between">
                <div>
                  <h3 className="tariffs-card-caption">Start</h3>
                  <p className="tariffs-card-subCaption">
                    Барои парвариши мағозаҳо
                  </p>
                </div>
                <Flex align="center" mb={20}>
                  <Text className="tariffs-card-textBig">6.900 ₸ </Text>
                  <Text className="tariffs-card-textSmall">/ дар як моҳ</Text>
                </Flex>
              </Flex>
              <button className="tariffs-card-btn" onClick={handleTariff}>
                Тарифро интихоб кунед
              </button>
              <Flex direction="column">
                <p className="tariffs-card-text tariffs-card-face">
                  Танҳо 1 корбар
                </p>
                <p className="tariffs-card-text tariffs-card-computer">
                  Фақат 1 касса
                </p>
                <p className="tariffs-card-text tariffs-card-shop">
                  Танҳо 1 нуқта
                </p>
              </Flex>
            </Flex>
          </Card.Section>
        </Card>
      </Grid.Col>
      <Grid.Col span={6}>
        <Card
          shadow="sm"
          padding="lg"
          radius={50}
          withBorder
          className="tariffs-card tariffs-card-active"
        >
          <Card.Section p={40}>
            <Flex direction="column" justify="space-between">
              <Flex direction="column" h="120px" justify="space-between">
                <Flex align="center">
                  <h3 className="tariffs-card-caption">Standart</h3>
                  <span className="tariffs-card-tag">Маъмул</span>
                </Flex>
                <p className="tariffs-card-subCaption">
                  Автоматикунонии пурраи мағоза
                </p>
                <Flex align="center" mb={20}>
                  <Text className="tariffs-card-textMedium">аз</Text>
                  <Text className="tariffs-card-textBig">{getSum()}</Text>
                  <Flex direction="column" ml={10}>
                    <Text className="tariffs-card-textExtraSmall">дар як моҳ</Text>
                    <Text className="tariffs-card-textExtraSmall">
                      бо пардохти нимсола
                    </Text>
                  </Flex>
                </Flex>
              </Flex>
              <button
                className="tariffs-card-btn tariffs-card-btn-active"
                onClick={handleTariff}
              >
                Тарифро интихоб кунед
              </button>
              <Flex direction="column">
                <p className="tariffs-card-text tariffs-card-face">
                  200 корбар
                </p>
                <p className="tariffs-card-text tariffs-card-computer">
                  Шумораи номаҳдуди кассаҳо
                </p>
                <p className="tariffs-card-text tariffs-card-shop">
                  Шумораи номаҳдуди нуқтаҳои савдо
                </p>
              </Flex>
            </Flex>
          </Card.Section>
        </Card>
      </Grid.Col>
      <Grid.Col span={12}>
        <Flex justify="center" mb={50}>
          <button className="tariffs-modal-btn" onClick={open}>
            Тарифҳоро муқоиса кунед
          </button>
        </Flex>
      </Grid.Col>
      <TarifCompareModal
        show={opened}
        close={close}
        handleTariff={handleTariff}
      />
    </Grid>
  );
};
